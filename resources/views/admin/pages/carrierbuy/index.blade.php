@extends('layouts.admin')
@section('content')
@can('admins_manage')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route("admin.carrierbuy.create") }}">
                {{ trans('global.add') }} {{ trans('carrierbuy') }}
            </a>
        </div>
    </div>
@endcan
<div class="card">
    <div class="card-header">
        {{ trans('cruds.user.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class="table  table-baccountantinfoed table-striped table-hover datatable datatable-User">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.user.fields.id') }}
                        </th>
                        
                        <th>
                        Carrier By Rout Name
                        </th>
                        <th>
                        Cellular Company
                        </th>
                         <th>
                        Carrier
                        </th>
                         <th>
                        Rout Price
                        </th>
                         <th>
                        Sc Commision
                        </th>


                        <td>
                            Status
                        </td>
                        <th>
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($carrierbuy as $key => $carrierbuy)
                        <tr data-entry-id="{{ $carrierbuy->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $carrierbuy->id ?? '' }}
                            </td>
                            
                            <td>
                                {{ $carrierbuy->carrier_by_rout_name ?? '' }}
                            </td>
                            <td>
                                {{ $carrierbuy->cellular_companies_id ?? '' }}
                            </td>
                        <td>
                                {{ $carrierbuy->carrier_id ?? '' }}
                            </td>
                            <td>
                                {{ $carrierbuy->route_sale_price_id ?? '' }}
                            </td>
                            <td>
                                {{ $carrierbuy->sc_commision ?? '' }}
                            </td>
                            <td>
                                {{ $carrierbuy->status ?? '' }}
                            </td>
                            
                            <td>
                                <a class="btn btn-xs btn-primary" href="{{ route('admin.carrierbuy.show', $carrierbuy->id) }}">
                                    {{ trans('global.view') }}
                                </a>

                                <a class="btn btn-xs btn-info" href="{{ route('admin.carrierbuy.edit', $carrierbuy->id) }}">
                                    {{ trans('global.edit') }}
                                </a>

                                <form action="{{ route('admin.carrierbuy.destroy', $carrierbuy->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
                                </form>

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
</div>
@endsection
@section('scripts')

@endsection