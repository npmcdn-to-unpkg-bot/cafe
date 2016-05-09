@extends('layouts.admin')

@section('style')
    {!! Html::style('css/admin/rickshaw/rickshaw.css') !!}
    {!! Html::style('css/admin/libs/morris.core.css') !!}
    <style>
        body{
            background: #e5e6e6;
        }
    </style>
@endsection

@section('content')
    <section>
        <div class="section-body">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body no-padding">
                            <div class="alert alert-callout alert-info no-margin">
                                <strong class="pull-right text-success text-lg">0,38% <i class="md md-trending-up"></i></strong>
                                <strong class="text-xl">$ 32,829</strong><br/>
                                <span class="opacity-50">Revenue</span>
                                <div class="stick-bottom-left-right">
                                    <div class="height-2 sparkline-revenue" data-line-color="#bdc1c1"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body no-padding">
                            <div class="alert alert-callout alert-warning no-margin">
                                <strong class="pull-right text-warning text-lg">0,01% <i class="md md-swap-vert"></i></strong>
                                <strong class="text-xl">432,901</strong><br/>
                                <span class="opacity-50">Visits</span>
                                <div class="stick-bottom-right">
                                    <div class="height-1 sparkline-visits" data-bar-color="#e5e6e6"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body no-padding">
                            <div class="alert alert-callout alert-danger no-margin">
                                <strong class="pull-right text-danger text-lg">0,18% <i class="md md-trending-down"></i></strong>
                                <strong class="text-xl">42.90%</strong><br/>
                                <span class="opacity-50">Bounce rate</span>
                                <div class="stick-bottom-left-right">
                                    <div class="progress progress-hairline no-margin">
                                        <div class="progress-bar progress-bar-danger" style="width:43%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="card-body no-padding">
                            <div class="alert alert-callout alert-success no-margin">
                                <h1 class="pull-right text-success"><i class="md md-timer"></i></h1>
                                <strong class="text-xl">54 sec.</strong><br/>
                                <span class="opacity-50">Avg. time on site</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-9">
                    <div class="card ">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="card-head">
                                    <header>Site activity</header>
                                </div><!--end .card-head -->
                                <div class="card-body height-8">
                                    <div id="flot-visitors-legend" class="flot-legend-horizontal stick-top-right no-y-padding"></div>
                                    <div id="flot-visitors" class="flot height-7" data-title="Activity entry" data-color="#7dd8d2,#0aa89e"></div>
                                </div><!--end .card-body -->
                            </div><!--end .col -->
                            <div class="col-md-4">
                                <div class="card-head">
                                    <header>Today's stats</header>
                                </div>
                                <div class="card-body height-8">
                                    <strong>214</strong> members
                                    <span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
                                    <div class="progress progress-hairline">
                                        <div class="progress-bar progress-bar-primary-dark" style="width:43%"></div>
                                    </div>
                                    756 pageviews
                                    <span class="pull-right text-success text-sm">0,68% <i class="md md-trending-up"></i></span>
                                    <div class="progress progress-hairline">
                                        <div class="progress-bar progress-bar-primary-dark" style="width:11%"></div>
                                    </div>
                                    291 bounce rates
                                    <span class="pull-right text-danger text-sm">21,08% <i class="md md-trending-down"></i></span>
                                    <div class="progress progress-hairline">
                                        <div class="progress-bar progress-bar-danger" style="width:93%"></div>
                                    </div>
                                    32,301 visits
                                    <span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
                                    <div class="progress progress-hairline">
                                        <div class="progress-bar progress-bar-primary-dark" style="width:63%"></div>
                                    </div>
                                    132 pages
                                    <span class="pull-right text-success text-sm">0,18% <i class="md md-trending-up"></i></span>
                                    <div class="progress progress-hairline">
                                        <div class="progress-bar progress-bar-primary-dark" style="width:47%"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="card">
                        <div class="card-head">
                            <header class="text-primary">Server status</header>
                        </div>
                        <div class="card-body height-4">
                            <div class="pull-right text-center">
                                <em class="text-primary">Temperature</em>
                                <br/>
                                <div id="serverStatusKnob" class="knob knob-shadow knob-primary knob-body-track size-2">
                                    <input type="text" class="dial" data-min="0" data-max="100" data-thickness=".09" value="50" data-readOnly=true>
                                </div>
                            </div>
                        </div>
                        <div class="card-body height-4 no-padding">
                            <div class="stick-bottom-left-right">
                                <div id="rickshawGraph" class="height-4" data-color1="#0aa89e" data-color2="rgba(79, 89, 89, 0.2)"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card ">
                        <div class="card-head">
                            <header>Todo's</header>
                            <div class="tools">
                                <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                            </div>
                        </div>
                        <div class="card-body no-padding height-9 scroll">
                            <ul class="list" data-sortable="true">
                                <li class="tile">
                                    <div class="checkbox checkbox-styled tile-text">
                                        <label>
                                            <input type="checkbox" checked>
                                            <span>Call clients for follow-up</span>
                                        </label>
                                    </div>
                                    <a class="btn btn-flat ink-reaction btn-default">
                                        <i class="md md-delete"></i>
                                    </a>
                                </li>
                                <li class="tile">
                                    <div class="checkbox checkbox-styled tile-text">
                                        <label>
                                            <input type="checkbox">
														<span>
															Schedule meeting
															<small>opportunity for new customers</small>
														</span>
                                        </label>
                                    </div>
                                    <a class="btn btn-flat ink-reaction btn-default">
                                        <i class="md md-delete"></i>
                                    </a>
                                </li>
                                <li class="tile">
                                    <div class="checkbox checkbox-styled tile-text">
                                        <label>
                                            <input type="checkbox">
														<span>
															Upload files to server
															<small>The files must be shared with all members of the board</small>
														</span>
                                        </label>
                                    </div>
                                    <a class="btn btn-flat ink-reaction btn-default">
                                        <i class="md md-delete"></i>
                                    </a>
                                </li>
                                <li class="tile">
                                    <div class="checkbox checkbox-styled tile-text">
                                        <label>
                                            <input type="checkbox">
                                            <span>Forward important tasks</span>
                                        </label>
                                    </div>
                                    <a class="btn btn-flat ink-reaction btn-default">
                                        <i class="md md-delete"></i>
                                    </a>
                                </li>
                                <li class="tile">
                                    <div class="checkbox checkbox-styled tile-text">
                                        <label>
                                            <input type="checkbox">
                                            <span>Forward important tasks</span>
                                        </label>
                                    </div>
                                    <a class="btn btn-flat ink-reaction btn-default">
                                        <i class="md md-delete"></i>
                                    </a>
                                </li>
                                <li class="tile">
                                    <div class="checkbox checkbox-styled tile-text">
                                        <label>
                                            <input type="checkbox">
                                            <span>Forward important tasks</span>
                                        </label>
                                    </div>
                                    <a class="btn btn-flat ink-reaction btn-default">
                                        <i class="md md-delete"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-md-9">
                    <div class="card">
                        <div class="card-head">
                            <header>Registration history</header>
                            <div class="tools">
                                <a class="btn btn-icon-toggle btn-refresh"><i class="md md-refresh"></i></a>
                                <a class="btn btn-icon-toggle btn-collapse"><i class="fa fa-angle-down"></i></a>
                                <a class="btn btn-icon-toggle btn-close"><i class="md md-close"></i></a>
                            </div>
                        </div>
                        <div class="card-body no-padding height-9">
                            <div class="row">
                                <div class="col-sm-6 hidden-xs">
                                    <div class="force-padding text-sm text-default-light">
                                        <p>
                                            <i class="md md-mode-comment text-primary-light"></i>
                                            The registrations are measured from the time that the redesign was fully implemented and after the first e-mailing.
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="force-padding pull-right text-default-light">
                                        <h2 class="no-margin text-primary-dark"><span class="text-xxl">66.05%</span></h2>
                                        <i class="fa fa-caret-up text-success fa-fw"></i> more registrations
                                    </div>
                                </div>
                            </div>
                            <div class="stick-bottom-left-right force-padding">
                                <div id="flot-registrations" class="flot height-5" data-title="Registration history" data-color="#0aa89e"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('script')
    {!! Html::script('js/admin/spin.js/spin.min.js') !!}
    {!! Html::script('js/admin/autosize/jquery.autosize.min.js') !!}
    {!! Html::script('js/admin/moment/moment.min.js') !!}
    {!! Html::script('js/admin/flot/jquery.flot.min.js') !!}
    {!! Html::script('js/admin/flot/jquery.flot.time.min.js') !!}
    {!! Html::script('js/admin/flot/jquery.flot.resize.min.js') !!}
    {!! Html::script('js/admin/flot/jquery.flot.orderBars.js') !!}
    {!! Html::script('js/admin/flot/jquery.flot.pie.js') !!}
    {!! Html::script('js/admin/flot/curvedLines.js') !!}
    {!! Html::script('js/admin/jquery-knob/jquery.knob.min.js') !!}
    {!! Html::script('js/admin/sparkline/jquery.sparkline.min.js') !!}
    {!! Html::script('js/admin/d3/d3.min.js') !!}
    {!! Html::script('js/admin/d3/d3.v3.js') !!}
    {!! Html::script('js/admin/rickshaw/rickshaw.min.js') !!}
    {!! Html::script('js/admin/demo/DemoDashboard.js') !!}
@endsection
