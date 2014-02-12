@extends('home.layout')
@section('styles')

@stylesheets('leaflet')
@stop

@section('content')
<div id="content">
    <div class="container" id="about">
        <div class="row">
            <!-- sidebar -->
            <div class="span3 sidebar">
                <div class="section-menu">
                    <ul class="nav nav-list">
                        <li class="nav-header">In This Section</li>
                        <li class="active"><a href="#" class="first">Analyze Data
                                <small>View Data Statistics...</small>
                                <i class="icon-angle-right"></i></a></li>
                    </ul>
                </div>
            </div>

            <!--main content-->

            <div class="span9">
                <h2 class="title-divider"><span>Data <span class="de-em">Analysis</span></span>
                    <small>View a big map.</small>
                </h2>

                <div class="map" id="map" style="height: 450px"></div>



            </div>
        </div>
    </div>
</div>

@stop

@section('scripts')

    @javascripts('leaflet')

@stop

