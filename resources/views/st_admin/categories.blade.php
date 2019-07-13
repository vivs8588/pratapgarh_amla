@extends('st_admin.master')

@section('title','Dashboard')


@section('content')

<div class="col-lg-12 p-0">
           <div class="card">
              <div class="card-body"> 
                <ul class="nav nav-tabs nav-tabs-danger nav-justified top-icon">
                  <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#tabe-1"><i class="icon-home"></i> <span class="hidden-xs">Add Account</span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#tabe-2"><i class="icon-user"></i> <span class="hidden-xs">Accounts [List]</span></a>
                  </li>
                 
                 
                  <li class="nav-item dropdown">
                    <a class="nav-link" disabled id="delButton"  href="javascript:void()"><i class="icon-trash icons text-danger"></i> <span class="hidden-xs">Delete</span></a>                    
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div id="tabe-1" class="container tab-pane active p-0">
                    <div class="card">
                       <div class="card-body">
                       <div class="card-title">Add Account</div>
                       <hr>
                       <form name="account_add_form" id="account_add_form" >

                       <div class="form-group row">
                        <label for="input-16" class="col-sm-2 col-form-label">Account Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-square" id="accountName" name="accountName" placeholder="Enter Account Name" />
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="input-17" class="col-sm-2 col-form-label">Print Name</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control form-control-square" id="printName" name="printName" placeholder="Enter Print Name" />
                        </div>
                      </div>
                    
                     
                       <div class="form-group row">
                        <label class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary shadow-primary btn-square px-5" id="saveAccount"><i class="icon-lock"></i> Save</button>
                        </div>
                      </div>
                      
                      <input type="hidden" id="url" value="{{ url('/Account') }}" />

                      <input type="hidden" id="_method" name="_method" value="POST" />
                     
                      </form>
                     </div>
         </div>

                  </div>
                  <div id="tabe-2" class="container tab-pane fade p-0">

                    <div class="col-lg-12 p-0">
                      <div class="card">
                        <div class="card-header"><i class="fa fa-table"></i> List Accounts</div>
                        <div class="card-body">
                          <div class="table-responsive">
                          <table id="datatable" class="table table-bordered">
                            <thead>
                                <tr>
                                    <th width="5%">SN</th>
                                    <th width="5%">
                                      <div class="icheck-material-success">
                                        <input type="checkbox" id="all" name="all"/>
                                        <label for="all"></label>
                                      </div>
                                    </th>
                                    <th width="40%">Account Name</th>
                                    <th width="40%">Print Name</th>
                                    <th width="10%">Action</th>
                                </tr>
                            </thead>
                            <tbody id="accountData">
                                
                               
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>SN</th>
                                    <th>All</th>
                                    <th>Account Name</th>
                                    <th>Print Name</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        </div>
                        </div>
                      </div>
                    </div>

                  
                  </div>
                
                  <div id="tabe-3" class="container tab-pane fade">
                    <p></p>
                  </div>
                </div>
              </div>
           </div>
        </div>

@endsection
