@extends('layout.admin.app')

@section('content')
<main class="app-main">
    <!-- .wrapper -->
    <div class="wrapper">
        <!-- .page -->
        <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
                <!-- .page-title-bar -->
                <header class="page-title-bar">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                <a href="#">
                                    <i class="breadcrumb-icon fa fa-angle-left mr-2"></i>Forms</a>
                            </li>
                        </ol>
                    </nav>
                    <h1 class="page-title"> Autocompletes </h1>
                </header>
                <!-- /.page-title-bar -->
                <!-- .page-section -->
                <div class="page-section">
                    <!-- .section-deck -->
                    <div class="section-deck">
                        <!-- .card -->
                        <section class="card card-fluid">
                            <!-- .card-body -->
                            <div class="card-body">
                                <h4 class="card-title"> Select2 </h4>
                                <h6 class="card-subtitle mb-4"> A jQuery based replacement for select boxes. </h6>
                                <!-- form -->
                                <form>
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label class="control-label" for="select2-basic-single">Single select
                                            boxes</label>
                                        <select id="select2-basic-single" class="form-control"> </select>
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label class="control-label" for="select2-basic-multiple">Multiple select
                                            boxes</label>
                                        <select id="select2-basic-multiple" class="form-control" multiple> </select>
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label class="control-label" for="select2-data-array">Loading array data</label>
                                        <select id="select2-data-array" class="form-control"> </select>
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label class="control-label" for="select2-data-remote">Loading remote
                                            data</label>
                                        <select id="select2-data-remote" class="form-control"> </select>
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <!-- .control-label -->
                                        <label class="control-label" for="select2-tagging">Tagging support</label>
                                        <select id="select2-tagging" class="form-control" multiple="multiple">
                                            <option> White </option>
                                            <option selected="selected"> Tomato </option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label class="control-label" for="select2-disabled-mode1">Single select
                                            disable</label>
                                        <select id="select2-disabled-mode1" class="form-control" disabled> </select>
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label class="control-label" for="select2-disabled-mode2">Multiple select
                                            disable</label>
                                        <select id="select2-disabled-mode2" class="form-control" multiple disabled>
                                            <option selected="selected"> White </option>
                                            <option selected="selected"> Tomato </option>
                                        </select>
                                    </div>
                                    <!-- /.form-group -->
                                </form>
                                <!-- /form -->
                                <!-- default demo source -->
                                <select id="select2-source-states" style="display: none">
                                    <optgroup label="Alaskan/Hawaiian Time Zone">
                                        <option value="AK"> Alaska </option>
                                        <option value="HI"> Hawaii </option>
                                    </optgroup>
                                    <optgroup label="Pacific Time Zone">
                                        <option value="CA"> California </option>
                                        <option value="NV"> Nevada </option>
                                        <option value="OR"> Oregon </option>
                                        <option value="WA"> Washington </option>
                                    </optgroup>
                                    <optgroup label="Mountain Time Zone">
                                        <option value="AZ"> Arizona </option>
                                        <option value="CO"> Colorado </option>
                                        <option value="ID"> Idaho </option>
                                        <option value="MT"> Montana </option>
                                        <option value="NE"> Nebraska </option>
                                        <option value="NM"> New Mexico </option>
                                        <option value="ND"> North Dakota </option>
                                        <option value="UT"> Utah </option>
                                        <option value="WY"> Wyoming </option>
                                    </optgroup>
                                    <optgroup label="Central Time Zone">
                                        <option value="AL"> Alabama </option>
                                        <option value="AR"> Arkansas </option>
                                        <option value="IL"> Illinois </option>
                                        <option value="IA"> Iowa </option>
                                        <option value="KS"> Kansas </option>
                                        <option value="KY"> Kentucky </option>
                                        <option value="LA"> Louisiana </option>
                                        <option value="MN"> Minnesota </option>
                                        <option value="MS"> Mississippi </option>
                                        <option value="MO"> Missouri </option>
                                        <option value="OK"> Oklahoma </option>
                                        <option value="SD"> South Dakota </option>
                                        <option value="TX" disabled="disabled"> Texas </option>
                                        <option value="TN"> Tennessee </option>
                                        <option value="WI"> Wisconsin </option>
                                    </optgroup>
                                    <optgroup label="Eastern Time Zone">
                                        <option value="CT"> Connecticut </option>
                                        <option value="DE"> Delaware </option>
                                        <option value="FL"> Florida </option>
                                        <option value="GA"> Georgia </option>
                                        <option value="IN"> Indiana </option>
                                        <option value="ME"> Maine </option>
                                        <option value="MD"> Maryland </option>
                                        <option value="MA"> Massachusetts </option>
                                        <option value="MI"> Michigan </option>
                                        <option value="NH"> New Hampshire </option>
                                        <option value="NJ"> New Jersey </option>
                                        <option value="NY"> New York </option>
                                        <option value="NC" disabled="disabled"> North Carolina </option>
                                        <option value="OH"> Ohio </option>
                                        <option value="PA"> Pennsylvania </option>
                                        <option value="RI"> Rhode Island </option>
                                        <option value="SC"> South Carolina </option>
                                        <option value="VT"> Vermont </option>
                                        <option value="VA"> Virginia </option>
                                        <option value="WV"> West Virginia </option>
                                    </optgroup>
                                </select>
                                <!-- /default demo source -->
                            </div>
                            <!-- /.card-body -->
                        </section>
                        <!-- /.card -->
                        <!-- .card -->
                        <section class="card card-fluid">
                            <!-- .card-body -->
                            <div class="card-body">
                                <h4 class="card-title"> Typeahead </h4>
                                <h6 class="card-subtitle mb-4"> A fast and fully-featured autocomplete library. </h6>
                                <!-- form -->
                                <form>
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label class="control-label" for="the-basics">The Basics</label>
                                        <input id="the-basics" type="text" class="form-control"
                                            placeholder="States of USA">
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label class="control-label" for="bloodhound">Bloodhound
                                            <i tabindex="0" class="fa fa-info-circle text-gray" data-toggle="tooltip"
                                                data-container="body" title="Suggestion Engine"></i>
                                        </label>
                                        <input id="bloodhound" type="text" class="form-control"
                                            placeholder="States of USA">
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label class="control-label" for="prefetch">Prefetch</label>
                                        <input id="prefetch" type="text" class="form-control" placeholder="Countries">
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label class="control-label" for="remote">Remote</label>
                                        <input id="remote" type="text" class="form-control"
                                            placeholder="Oscar winners for Best Picture">
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label class="control-label" for="custom-templates">Custom Templates</label>
                                        <input id="custom-templates" type="text" class="form-control"
                                            placeholder="Oscar winners for Best Picture">
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label class="control-label" for="default-suggestions">Default
                                            Suggestions</label>
                                        <input id="default-suggestions" type="text" class="form-control"
                                            placeholder="NFL Teams">
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- .form-group -->
                                    <div class="form-group">
                                        <label class="control-label" for="multiple-datasets">Multiple Datasets</label>
                                        <input id="multiple-datasets" type="text" class="form-control"
                                            placeholder="NBA and NHL teams">
                                    </div>
                                    <!-- /.form-group -->
                                    <!-- .form-group -->
                                    <div class="form-group has-typeahead-scrollable">
                                        <label class="control-label" for="scrollable-dropdown-menu">Scrollable Dropdown
                                            Menu</label>
                                        <input id="scrollable-dropdown-menu" type="text" class="form-control"
                                            placeholder="Countries">
                                    </div>
                                    <!-- /.form-group -->
                                </form>
                                <!-- /form -->
                            </div>
                            <!-- /.card-body -->
                        </section>
                        <!-- /.card -->
                    </div>
                    <!-- /.section-deck -->
                </div>
                <!-- /.page-section -->
            </div>
            <!-- /.page-inner -->
        </div>
        <!-- /.page -->
    </div>
    <!-- /.wrapper -->
</main>
@endsection

