@extends('Admin.admin_layout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row mb-3">
                @if(Session::has("message"))
                    <span class="bg-info p-2 text-white mb-3">{{ Session::get("message") }}</span>
                @endif
            </div>
            
            <div class="row mt-2">
                

                <div class="col-sm-4 col-3">
                    <h4 class="page-title"> Sales List</h4>
                </div>
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{ url('admin/invoices') }}" class="btn btn btn-primary btn-rounded  mr-2"><i
                        class="fa fa-refresh"></i> Reload</a>
                </div>
            </div>
            <div class="row">
                {{-- <form method="get">
                <div class="row">
                <div class="col-md-4 mb-3">
                    <label>Search By Sale Man</label>
                    <input class="form-control" name="sale_man" type="text">
                </div>

                <div class="col-md-4">
                    <label>Search By Customer</label>
                    <input class="form-control" name="customer_name" type="text">
                </div>

                <div class="col-md-2">
                    <input class="btn btn-primary mt-4" type="submit" value="Search">
                </div>
            </div>
        </form> --}}

                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-border table-striped custom-table datatable mb-0">
                            <thead>
                                <tr>
                                    <th>Invoice #</th>
                                    <th>Customer Name</th>
                                    <th>Total Items</th>
                                    <th>Grand Total</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($invoices))
                                    @foreach ($invoices as $key => $invoice )
                                        <tr>
                                            <td>{{ $invoice->id }}</td>
                                            <td>{{ $invoice->customer->name ?? ''}}</td>
                                            <td>{{ $invoice->total_items}}</td>
                                            <td>{{ $invoice->total_price}}</td>
                                            <td><span class="text-uppercase">{{ $invoice->status}}</span></td>
                                            <td class="">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                        aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        {{-- <a class="dropdown-item" href="{{ url('admin/invoice-detail/'.$invoice->invoice_no) }}"><i
                                                            class="fa fa-eye m-r-5"></i> View Invoice</a> --}}
                                                            <a class="dropdown-item" href="#"><i
                                                                class="fa fa-eye m-r-5"></i> View Invoice</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
