<?php

namespace App\Http\Controllers;

use App\Apply;
use App\ApplyTender;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Session;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('Dashboard.index');
    }

    public function getAppliedTenderlist(){

//      $appliedTender = ApplyTender::select('tender.title', 'tendertype.tenderTypeName','company.name', 'status.statusName', 'department.departmentName', 'apply.*')
//                            ->leftJoin('tender', 'tender.tenderId', 'apply.tender_tenderId')
//                            ->leftJoin('company', 'company.companyId', 'apply.company_companyId')
//                            ->leftJoin('department', 'tender.fkdepartmentId', 'department.departmentId')
//                            ->leftJoin('tendertype', 'tendertype.tenderTypeId', 'tender.fkTenderTypeId')
//                            ->leftJoin('status', 'tender.fkstatusId', 'status.statusId')
//                            ->whereDate('applyDate', date("Y/m/d"));

        $appliedTender = Apply::select('tender.title', 'tendertype.tenderTypeName','company.name', 'status.statusName',
            'department.departmentName', 'apply.*','zone.zoneName')
            ->leftJoin('tender', 'tender.tenderId', 'apply.tender_tenderId')
            ->leftJoin('company', 'company.companyId', 'apply.company_companyId')
            ->leftJoin('department', 'tender.fkdepartmentId', 'department.departmentId')
            ->leftJoin('tendertype', 'tendertype.tenderTypeId', 'tender.fkTenderTypeId')
            ->leftJoin('status', 'tender.fkstatusId', 'status.statusId')
            ->leftJoin('zone', 'zone.zoneId', 'tender.fkzoneId')
            ->whereDate('applyDate', date("Y/m/d"));

        $datatables = Datatables::of($appliedTender);
        return $datatables->make(true);
    }
}
