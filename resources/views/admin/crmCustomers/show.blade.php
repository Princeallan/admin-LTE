@extends('layouts.admin')
@section('content')
<div class="content">

    <div class="row">
        <div class="col-lg-12">

            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('global.show') }} {{ trans('cruds.crmCustomer.title') }}
                </div>
                <div class="panel-body">

                    <div class="form-group">
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.first_name') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->first_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.last_name') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->last_name }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.status') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->status->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.email') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->email }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.phone') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.address') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->address }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.skype') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->skype }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.website') }}
                                    </th>
                                    <td>
                                        {{ $crmCustomer->website }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.crmCustomer.fields.description') }}
                                    </th>
                                    <td>
                                        {!! $crmCustomer->description !!}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <a style="margin-top:20px;" class="btn btn-default" href="{{ url()->previous() }}">
                            {{ trans('global.back_to_list') }}
                        </a>
                    </div>

                    <ul class="nav nav-tabs">
                        <li class="active">
                            <a data-toggle="tab" href="#CrmNote">
                                CrmNote
                            </a>
                        </li>
                        <li>
                            <a data-toggle="tab" href="#CrmDocument">
                                CrmDocument
                            </a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="CrmNote">
                            @includeIf('admin.crmCustomers.relationships.crmnotes', ['crmnotes' => $crmCustomer->crmnotes])
                        </div>
                        <div class="tab-pane fade in" id="CrmDocument">
                            @includeIf('admin.crmCustomers.relationships.crmdocuments', ['crmdocuments' => $crmCustomer->crmdocuments])
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection