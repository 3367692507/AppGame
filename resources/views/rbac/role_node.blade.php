@extends('layouts.base')

@section('title', '题目类型列表')

@section('content')
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i>角色管理</h3>
            <div class="row mt">
                <div class="col-lg-12">
                    <div class="content-panel">
                        <a href="role_add"><button class="btn btn-round btn-primary" type="button">添加角色</button></a>
                        <hr>
                        <section id="unseen">
                            <table class="table table-bordered table-striped table-condensed">

                            </table>
                        </section>
                    </div><!-- /content-panel -->
                </div><!-- /col-lg-4 -->
            </div><!-- /row -->

        </section><! --/wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->
@endsection