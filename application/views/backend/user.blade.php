@extends('backend.layouts.master')

@section('title', 'User')

@section('container')
<section id="main-content">
          <section class="wrapper">
              <!-- page start-->
                <div class="row">
                    <div class="col-sm-12">
                        <section class="card">
                            <header class="card-header">
                                {{ "Kelola Pengguna" }}
                                    <span class="tools pull-right">
                                        <a href="" class="fa fa-plus"></a>
                                        <a href="javascript:;" class="fa fa-chevron-down"></a>
                                    </span>
                            </header>
                            <div class="card-body">
                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="dynamic-table">
                                        <thead>
                                            <tr>
                                                <th>ID Pengguna</th>
                                                <th></th>
                                                <th>Nama Pengguna</th>
                                                <th>Level User</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID Pengguna</th>
                                                <th></th>
                                                <th>Nama Pengguna</th>
                                                <th>Level User</th>
                                                <th></th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
          </section>
      </section>
@endsection