<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Carbon\Carbon;
use Hash;
use Image;
use PHPExcel;
use PHPExcel_IOFactory;
use App\users;
use App\Checklist;
use App\Company;
use App\Check_station;
use App\Station_list;
use Datatables;
use PHPExcel_Cell;

class BackendController extends Controller
{
    public function index()
    {
        $users = users::all();
        $data = array(
            'users' => $users
        );
        return view('Backend.user.user_list', $data);
    }
    public function show_user()
    {
        $company = request('company');
        $user_list = users::where('user_company', $company)->selectRaw('id,user_no,user_id,user_name,user_company,user_department,user_position')->get();
        $sQuery = Datatables::of($user_list)
            ->addColumn('company_new_name', function ($data) {
                return $data->company_show->company_name;
            });
        return $sQuery->escapeColumns([])->make(true);
    }
    public function import()
    {
        return view('Backend.user.user_import');
    }
    public function create()
    {
        // $checklist = Checklist::all()->where('checklist_active', 1);
        // $company = Company::all()->where('company_active', 1);
        // $data = array(
        //     'checklist' => $checklist,
        //     'company' => $company
        // );
        // return view('Backend.user.user_add', $data);
    }
    public function delete($id)
    {
        $user_list = users::find($id);
        foreach ($user_list->check_station as $key2 => $value2) {
            foreach ($value2->call_list as $key => $value_station) {
                $value_station->delete();
            }
            $value2->delete();
        }
        $user_list->delete();
        return back();
    }
    public function zero_fill($vget, $vnum = "4")
    {
        $vpost = str_pad($vget, $vnum, "0", STR_PAD_LEFT);
        return $vpost;
    }
    public function import_excel(Request $request)
    {
        $path = $request->file('import_file')->getRealPath();
        try {
            $inputFileType = PHPExcel_IOFactory::identify($path);
            $objReader = PHPExcel_IOFactory::createReader($inputFileType);
            $objPHPExcel = $objReader->load($path);
        } catch (Exception $e) {
            die('Error loading file "' . pathinfo($path, PATHINFO_BASENAME) . '": ' . $e->getMessage());
        }
        $sheet = $objPHPExcel->getSheet(0);
        $highestRow = $sheet->getHighestRow();
        $highestColumn = $sheet->getHighestColumn();
        $colString = PHPExcel_Cell::columnIndexFromString($highestColumn);
        for ($row = 5; $row <= $highestRow; $row++) {
            $check_company = $sheet->getCellByColumnAndRow(4, $row);
            if ($check_company != '') {
                $check_id = $sheet->getCellByColumnAndRow(1, $row);
                $new_check_id = $this->zero_fill($check_id);
                $year_now = $request->import_year;
                $check_user = users::where('user_company', $check_company)->where('user_id', $new_check_id)->where('user_year', 'like',$year_now)->first();
                if (!empty($check_user)) {
                    $user_list = users::find($check_user->id);
                } else {
                    $user_list = new users;
                }
                //////////////////// Data ////////////////////
                $no = $sheet->getCellByColumnAndRow(0, $row);
                $id = $sheet->getCellByColumnAndRow(1, $row);
                $name = $sheet->getCellByColumnAndRow(2, $row);
                $sex = $sheet->getCellByColumnAndRow(3, $row);
                $company = $sheet->getCellByColumnAndRow(4, $row);
                $department = $sheet->getCellByColumnAndRow(5, $row);
                $position = $sheet->getCellByColumnAndRow(6, $row);
                $outher = $sheet->getCellByColumnAndRow(7, $row);
                $user_list->user_no = $no;
                $user_list->user_id = $this->zero_fill($id);
                $user_list->user_name = $name;
                $user_list->user_emsex = $sex;
                $user_list->user_company = $company;
                $user_list->user_department = $department;
                $user_list->user_position = $position;
                $user_list->user_outher = $outher;
                $user_list->user_year = $year_now;
                if (!empty($check_user)) {
                    $user_list->update();
                } else {
                    $user_list->save();
                }
                //////////////////// Data ////////////////////

                //////////////////// List ////////////////////
                $check = array();
                for ($i = 8; $i < $colString; $i++) {
                    $check[] = $sheet->getCellByColumnAndRow($i, $row);
                }
                $num = 0;
                $colum = 0;
                $check_station = '';
                $check_station_list = array();
                foreach ($check as $key => $checks) {
                    if ($checks != '') {
                        $check_put = $sheet->getCellByColumnAndRow($num + 8, 4);
                        $put_list = str_replace(" ", "", $check_put);
                        $check_station_list[] = $put_list;
                        $colum++;
                    }
                    $num++;
                }
                //////////////////// List ////////////////////

                //////////////////// Check Station Insert ////////////////////
                foreach ($check_station_list as $item => $counts) {
                    $cbc = 0;
                    $ua = 0;
                    $clot = 0;
                    $fbs = 0;
                    $stool = 0;
                    $xray = 0;
                    $ekg = 0;
                    $tb = 0;
                    $eye1 = 0;
                    $eye2 = 0;
                    $lung = 0;
                    $muscle = 0;
                    $audio = 0;
                    $sick = 0;
                    $ua_yellow = 0;
                    $stool2 = 0;
                    $papsmear = 0;
                    $ekg_2 = 0;
                    $pe = 0;
                    if (
                        $counts == 'CBC' || $counts == 'MethyleneChloride' || $counts == 'AcetylCholinesterase(AChE)' || $counts == 'Chloroform' || $counts == 'Copper(Blood)' || $counts == 'MethyleneChloride'
                        || $counts == 'Ketone(Blood)' || $counts == 'Ammonia' || $counts == 'Lead' || $counts == 'ABOBloodGroup' || $counts == 'Manganese(Mn)' || $counts == 'NitrousOxide(Methemoglobin)' || $counts == 'Malarai'
                        || $counts == 'Mercury(Hg)inBlood' || $counts == 'BloodRh'
                    ) {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'CBC')->first();
                        $cbc = 1;
                    } elseif ($counts == 'FBS' || $counts == 'Ether' || $counts == 'EthylAcetate') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'FBS')->first();
                        $fbs = 1;
                    } elseif (
                        $counts == 'BUN' || $counts == 'Creatinine' || $counts == 'UricAcid' || $counts == 'TotalCholesterol' || $counts == 'Triglyceride' || $counts == 'VLDL-Cholesterol' || $counts == 'MTX'
                        || $counts == 'HDL-Cholesterol' || $counts == 'LDL-Cholesterol' || $counts == 'SGOT' || $counts == 'SGPT' || $counts == 'TotalProtein' || $counts == 'CK-MB' || $counts == 'Copper(Blood)'
                        || $counts == 'Albumin' || $counts == 'Globulin' || $counts == 'TotalBilirubin' || $counts == 'DirectBilirubin' || $counts == 'ALP' || $counts == 'CreatinineKinase(CKTotal)' || $counts == 'Arsenic(As)'
                        || $counts == 'GGT' || $counts == 'HBsAg' || $counts == 'Anti-HBs' || $counts == 'HbA1c' || $counts == 'CEA' || $counts == 'AFP' || $counts == 'Cadmium(Blood)' || $counts == 'Silver(เงิน)'
                        || $counts == 'PSA' || $counts == 'CA125' || $counts == 'CA15-3' || $counts == 'CA19-9' || $counts == 'SerumIron(SI)' || $counts == 'TotalCalcium' || $counts == 'Aluminium(Al-Inblood)'
                        || $counts == 'Phosphorus' || $counts == 'Anti-HAV(IgM)' || $counts == 'Anti-HAV(IgG)' || $counts == 'Anti-HBc(Total Ab)' || $counts == 'Anti-HBcIgM' || $counts == 'HBeAg' || $counts == 'CPK(Total)'
                        || $counts == 'LiverFunctionTests'
                        || $counts == 'Anti-HBe' || $counts == 'Anti-HCV' || $counts == 'Anti-HIV' || $counts == 'VDRL' || $counts == 'RheumatoidFactor(RF)' || $counts == 'Iron,Serum' || $counts == 'T3' || $counts == 'widaltest'
                        || $counts == 'T4' || $counts == 'FreeT3' || $counts == 'FreeT4' || $counts == 'TSH' || $counts == 'Ethanol ' || $counts == 'Carbamazepine(Tegretol)' || $counts == 'Cadmiumในเลือด' || $counts == 'ANF'
                        || $counts == 'PAP' || $counts == 'Acetone'
                    ) {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'Clot')->first();
                        $clot = 1;
                    } elseif (
                        $counts == 'PregnancyTest' || $counts == 'Zinc(Zn)' || $counts == 'Hydroquinone(HQ)' || $counts == 'Acrylonitrile' || $counts == 'Tetrahydrofuram(THF)' || $counts == 'Trichloroacetic(TCA)'
                        || $counts == 'Trichloroethanol(TCE)'
                        || $counts == 'SilicaGel' || $counts == 'MineralOil' || $counts == 'Cadmium(Urine)' || $counts == 'TTCA' || $counts == 'B-HCG' || $counts == 'Carbarmate' || $counts == 'Oraganophosphate'
                        || $counts == 'LeadinUrine' || $counts == 'Microbumin'
                        || $counts == 'Aluminium(Al)' || $counts == 'Nickel(Ni)' || $counts == 'Copper(Urine)' || $counts == 'Mercury(Hg)' || $counts == 'Antimony(Sb)' || $counts == 'Hippuricacid' || $counts == 'T4(ua)'
                        || $counts == 'Bromide'
                        || $counts == 'Acetone' || $counts == 'n-Hexane' || $counts == 'Cyclohexane' || $counts == 'Cobalt(Co)' || $counts == 'Methanol' || $counts == 'MEK' || $counts == 'Trichloro-compounds' || $counts == 'MTBE'
                        || $counts == 'EthylAcetate(ua)'
                        || $counts == 'Xylene' || $counts == 'Benzene' || $counts == 'Arsenic(As)' || $counts == 'Chromium(Cr)' || $counts == 'Fluoride' || $counts == 'Formaldehyde' || $counts == 'Formicacid'
                        || $counts == 'Mandelicacid' || $counts == 'MIBK' || $counts == 'Cyanide(Cn)' || $counts == 'Tin(Sn)' || $counts == 'isopropylalcohol (IPA)'
                    ) {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'UA แดง')->first();
                        $ua = 1;
                    } elseif ($counts == 'StoolCulture') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'Stool Culture')->first();
                        $stool = 1;
                    } elseif ($counts == 'StoolExamination') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'Stool Examination')->first();
                        $stool2 = 1;
                    } elseif ($counts == 'X-ray') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'X-ray')->first();
                        $xray = 1;
                    } elseif ($counts == 'EKG') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'ตรวจคลื่นไฟฟ้าหัวใจ')->first();
                        $ekg = 1;
                    } elseif ($counts == 'วัณโรคTB') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'TB วัณโรค')->first();
                        $tb = 1;
                    } elseif ($counts == 'สายตาทั่วไป') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'ตรวจวัดสายตาทั่วไป')->first();
                        $eye1 = 1;
                    } elseif ($counts == 'VisionOccupationTest') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'สายตาอาชีวอนามัย')->first();
                        $eye2 = 1;
                    } elseif ($counts == 'LungTest') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'เป่าปอด')->first();
                        $lung = 1;
                    } elseif ($counts == 'กล้ามเนื้อมือแขนขาหลัง') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'กล้ามเนื้อมือแขนขาหลัง')->first();
                        $muscle = 1;
                    } elseif ($counts == 'Audiometry') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'การได้ยิน')->first();
                        $audio = 1;
                    } elseif ($counts == 'วัคซีนไข้หวัดใหญ่') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'วัคซีนไข้หวัดใหญ่')->first();
                        $sick = 1;
                    } elseif ($counts == 'Urinalysis' || $counts == 'Amphetamine' || $counts == 'Ketone(Urine)') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'UA เหลือง')->first();
                        $ua_yellow = 1;
                    } elseif ($counts == 'papsmear') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'Papsmear')->first();
                        $papsmear = 1;
                    } elseif ($counts == 'ekgอับอากาศ') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'คลื่นไฟฟ้าอับอากาศ')->first();
                        $ekg_2 = 1;
                    } elseif ($counts == 'PE') {
                        $check_station = Check_station::where('station_user_ref', $user_list->id)->where('station_list', 'พบแพทย์')->first();
                        $pe = 1;
                    }
                    /////////////////// Save ///////////////////
                    if (!empty($check_station)) {
                        $station = Check_station::find($check_station->id);
                    } else {
                        $station = new Check_station;
                    }
                    $station->station_user_ref = $user_list->id;
                    if ($cbc == 1) {
                        $station->station_list = 'CBC';
                    } elseif ($ua == 1) {
                        $station->station_list = 'UA แดง';
                    } elseif ($clot == 1) {
                        $station->station_list = 'Clot';
                    } elseif ($fbs == 1) {
                        $station->station_list = 'FBS';
                    } elseif ($stool == 1) {
                        $station->station_list = 'Stool Culture';
                    } elseif ($xray == 1) {
                        $station->station_list = 'X-ray';
                    } elseif ($ekg == 1) {
                        $station->station_list = 'ตรวจคลื่นไฟฟ้าหัวใจ';
                    } elseif ($tb == 1) {
                        $station->station_list = 'TB วัณโรค';
                    } elseif ($eye1 == 1) {
                        $station->station_list = 'ตรวจวัดสายตาทั่วไป';
                    } elseif ($eye2 == 1) {
                        $station->station_list = 'สายตาอาชีวอนามัย';
                    } elseif ($lung == 1) {
                        $station->station_list = 'เป่าปอด';
                    } elseif ($muscle == 1) {
                        $station->station_list = 'กล้ามเนื้อมือแขนขาหลัง';
                    } elseif ($audio == 1) {
                        $station->station_list = 'การได้ยิน';
                    } elseif ($sick == 1) {
                        $station->station_list = 'วัคซีนไข้หวัดใหญ่';
                    } elseif ($ua_yellow == 1) {
                        $station->station_list = 'UA เหลือง';
                    } elseif ($stool2 == 1) {
                        $station->station_list = 'Stool Examination';
                    } elseif ($papsmear == 1) {
                        $station->station_list = 'Papsmear';
                    } elseif ($ekg_2 == 1) {
                        $station->station_list = 'คลื่นไฟฟ้าอับอากาศ';
                    } elseif ($pe == 1) {
                        $station->station_list = 'พบแพทย์';
                    }
                    $station->station_active = 1;
                    if (!empty($check_station)) {
                        $station->update();
                    } else {
                        $station->save();
                    }
                    $list_save = Checklist::where('checklist_name', $counts)->first();
                    if (!empty($list_save)) {
                        if ($station->station_list == $list_save->checklist_short_name) {
                            $station_list = Station_list::where('stl_checklist_ref', $station->id)->where('stl_name', $counts)->first();
                            if (isset($station_list)) {
                                $station_save = Station_list::find($station_list->id);
                            } else {
                                $station_save = new Station_list;
                            }
                            $station_save->stl_checklist_ref = $station->id;
                            $station_save->stl_name = $counts;
                            $station_save->stl_active = 1;
                            if (isset($station_list)) {
                                $station_save->update();
                            } else {
                                $station_save->save();
                            }
                        }
                    } 
                }
            }
        }
        $sucess = 1;
        $data = array(
            'success' => $sucess
        );
        return view('Backend.user.user_import', $data);
    }
    public function show($id)
    {
        $user_list = users::find($id);
        $data = array(
            'user_list' => $user_list,
        );
        return view('Backend.user.user_detail', $data);
    }
    public function checkout()
    {
        $checklist = Checklist::orderby('checklist_short_name','desc')
        ->groupby('checklist_short_name')
        ->get();
        $company = Company::all();
        $data = array(
            'company' => $company,
            'checklist' => $checklist
        );
        return view('Backend.checkout.checkout',$data);
    }
    public function checkout_search($id , $company)
    {
        if(!empty(Session::get('company'))){
            if(Session::get('company') == $company){
                $user_list = users::where('user_id', $id)->where('user_company',$company)->first();
            }else{
                Session::put('company',$company);
                $user_list = users::where('user_id', $id)->where('user_company',$company)->first();
            }
        }else{
            Session::put('company',$company);
            $user_list = users::where('user_id', $id)->where('user_company',$company)->first();
        }
        return $user_list;
    }
    public function checkout_changestatus($id , $company)
    {
        $user_list = users::where('user_id', $id)->where('user_company',$company)->first();
        $user_list->user_checkout = null;
        $user_list->update();
        return back();
    }
    public function update_checkout(Request $request)
    {
        $user_list = users::where('user_id', $request->hn)->first();
        $user_list->user_checkout = carbon::now()->format('H:i:s');
        $user_list->update();
        return back();
    }
}
