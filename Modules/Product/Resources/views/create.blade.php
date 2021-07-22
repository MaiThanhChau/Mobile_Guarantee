@extends('layout.admin.app')
@section('content')
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
                <h1 class="page-title"> Thêm sản phẩm </h1>
              </header>
              <!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar">
                    <i class="fa fa-th-list"></i>
                  </button>
                </div>
                <!-- .card -->
                <section id="base-style" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Thông tin sản phẩm</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf1">Mã sản phẩm</label>
                          <input type="email" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="e.g. johndoe@looper.com">
                          <small id="tf1Help" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf2">Number input</label>
                          <input type="number" class="form-control" id="tf2" placeholder="Amount (to the nearest dollar)"> </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf3">File input</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="tf3" multiple>
                            <label class="custom-file-label" for="tf3">Choose file</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf4">Clearable</label>
                          <div class="has-clearable">
                            <button type="button" class="close" aria-label="Close">
                              <span aria-hidden="true">
                                <i class="fa fa-times-circle"></i>
                              </span>
                            </button>
                            <input type="text" class="form-control" id="tf4" placeholder="Type something..." value="Moonlight"> </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf5">Textarea</label>
                          <textarea class="form-control" id="tf5" rows="3"></textarea>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>States</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="tfDisabled">Disabled input</label>
                          <input class="form-control" id="tfDisabled" type="email" placeholder="e.g. johndoe@looper.com" disabled> </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="tfReadonly">Readonly input</label>
                          <input class="form-control" id="tfReadonly" type="text" value="Stilearning" readonly> </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="form-control-label" for="tfValid">Valid input</label>
                          <input type="text" class="form-control is-valid" id="tfValid">
                          <div class="valid-feedback"> Success! You've done it. </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="form-control-label" for="tfInvalid">Invalid input</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input is-invalid" id="tfInvalid">
                            <label class="custom-file-label" for="tfInvalid">Choose file</label>
                            <div class="invalid-feedback">
                              <i class="fa fa-exclamation-circle fa-fw"></i> Sorry, the image must be at least 300×300. </div>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Sizes</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label col-form-label-sm" for="tfSmall">Small input</label>
                          <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="tfSmall"> </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Default input</label>
                          <input type="text" class="form-control" placeholder="Default input" id="tfDefault"> </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label col-form-label-lg" for="tfLarge">Large input</label>
                          <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="tfLarge"> </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .card -->
                <section id="labels" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Labels</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="lbl1">Project name
                            <abbr title="Required">*</abbr>
                          </label>
                          <input type="text" class="form-control" id="lbl1" placeholder="Required asterisks" required=""> </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="lbl2">Project name
                            <span class="badge badge-danger">Required</span>
                          </label>
                          <input type="text" class="form-control" id="lbl2" placeholder="Required label" required=""> </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="lbl3">Description
                            <span class="badge badge-secondary">
                              <em>Optional</em>
                            </span>
                          </label>
                          <textarea class="form-control" id="lbl3" rows="3" placeholder="Optional label"></textarea>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="d-flex justify-content-between" for="lbl4">
                            <span>Description</span>
                            <span class="text-muted">0 of 80 characters used</span>
                          </label>
                          <textarea class="form-control" id="lbl4" rows="3" placeholder="Label with description"></textarea>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="d-flex justify-content-between" for="lbl5">
                            <span>Password</span>
                            <a href="#lbl5" data-toggle="password">
                              <i class="fa fa-eye fa-fw"></i>
                              <span>Show</span>
                            </a>
                          </label>
                          <input type="password" class="form-control" value="label_with_action" id="lbl5"> </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .card -->
                <section id="floating-label" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Floating label</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <div class="form-label-group">
                            <input type="email" class="form-control" id="fl1" value="johndoe@looper.com" placeholder="Email address" required="">
                            <label for="fl1">Email address</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <div class="form-label-group">
                            <input type="password" class="form-control" id="fl2" placeholder="Password" required="">
                            <label for="fl2">Password</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>States</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <div class="form-label-group">
                            <input type="email" class="form-control" id="fl3" placeholder="Email address" disabled>
                            <label for="fl3">Email address</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <div class="form-label-group">
                            <input type="email" class="form-control" id="fl4" value="readonly@looper.com" placeholder="Email address" readonly>
                            <label for="fl4">Email address</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <div class="form-label-group">
                            <input type="email" class="form-control is-valid" id="fl5" value="johndoe@looper.com" placeholder="Email address">
                            <label for="fl5">Email address</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <div class="form-label-group">
                            <input type="password" class="form-control is-invalid" id="fl6" value="secrettt" placeholder="Password">
                            <label for="fl6">Password</label>
                            <div class="invalid-feedback">
                              <i class="fa fa-exclamation-circle fa-fw"></i> Sorry, that password isn't right. </div>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .card -->
                <section id="selects" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Selects</legend>
                        <!-- grid row -->
                        <div class="row">
                          <!-- grid column -->
                          <div class="col-md-6">
                            <!-- .form-group -->
                            <div class="form-group">
                              <label for="sel1">Country</label>
                              <select class="custom-select" id="sel1" required="">
                                <option value=""> Choose... </option>
                                <option> United States </option>
                              </select>
                            </div>
                            <!-- /.form-group -->
                          </div>
                          <!-- /grid column -->
                          <!-- grid column -->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="sel2">State</label>
                              <select class="custom-select" id="sel2" required="">
                                <option value=""> Choose... </option>
                                <option> California </option>
                              </select>
                            </div>
                          </div>
                          <!-- /grid column -->
                        </div>
                        <!-- /grid row -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>States</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="sel3">Country</label>
                          <select class="custom-select" id="sel3" required="" disabled>
                            <option value=""> Choose... </option>
                            <option selected> United States </option>
                          </select>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="sel4">Country</label>
                          <select class="custom-select is-valid" id="sel4" required="">
                            <option value=""> Choose... </option>
                            <option selected> United States </option>
                          </select>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="sel5">State</label>
                          <select class="custom-select is-invalid" id="sel5" required="">
                            <option value=""> Choose... </option>
                            <option> California </option>
                          </select>
                          <div class="invalid-feedback">
                            <i class="fa fa-exclamation-circle fa-fw"></i> Please select your state. </div>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Sizes</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label col-form-label-sm" for="selSmall">Small select</label>
                          <select class="custom-select custom-select-sm" id="selSmall">
                            <option> Small select </option>
                          </select>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label" for="selDefault">Default select</label>
                          <select class="custom-select" id="selDefault">
                            <option> Default select </option>
                          </select>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label col-form-label-lg" for="selLarge">Large select</label>
                          <select class="custom-select custom-select-lg" id="selLarge">
                            <option> Large select </option>
                          </select>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .card -->
                <section id="checkboxes" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Checkboxes</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="d-block">Inline checkbox</label>
                          <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ckb1">
                            <label class="custom-control-label" for="ckb1">Basic checkbox</label>
                          </div>
                          <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ckb2" indeterminate="">
                            <label class="custom-control-label" for="ckb2">Indeterminate</label>
                          </div>
                          <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ckb3" checked>
                            <label class="custom-control-label" for="ckb3">Checked</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="d-block">Hidden label</label>
                          <div class="custom-control-stacked">
                            <div class="custom-control custom-control-inline custom-control-nolabel custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="ckb4">
                              <label class="custom-control-label" for="ckb4">Basic checkbox</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-control-nolabel custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="ckb5" indeterminate="">
                              <label class="custom-control-label" for="ckb5">Indeterminate</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-control-nolabel custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="ckb6" checked>
                              <label class="custom-control-label" for="ckb6">Checked</label>
                            </div>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label>Available for block?</label>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ckb7">
                            <label class="custom-control-label" for="ckb7">Yes, this is a block checkbox</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label>Helper content</label>
                          <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="ckb8">
                            <label class="custom-control-label" for="ckb8">Shipping address is the same as my billing address</label>
                            <div class="text-muted"> Reduces the number of fields required to check out. The billing address can still be edited. </div>
                          </div>
                          <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="ckb9">
                            <label class="custom-control-label" for="ckb9">Save this information for next time</label>
                            <div class="text-muted"> This is a help text to guide users to explain the choice you will be making. </div>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label>States</label>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ckb10" disabled>
                            <label class="custom-control-label" for="ckb10">Option is disabled</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input is-valid" id="ckb11">
                            <label class="custom-control-label" for="ckb11">Maximal project</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input is-invalid" id="ckb12">
                            <label class="custom-control-label" for="ckb12">Autosave</label>
                            <div class="invalid-feedback">
                              <i class="fa fa-exclamation-circle fa-fw"></i> Can't update your setting, please try again. </div>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .card -->
                <section id="radios" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Radios</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="d-block">Inline radio</label>
                          <div class="custom-control custom-control-inline custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup1" id="rd1">
                            <label class="custom-control-label" for="rd1">Credit card</label>
                          </div>
                          <div class="custom-control custom-control-inline custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup1" id="rd2">
                            <label class="custom-control-label" for="rd2">Debit card</label>
                          </div>
                          <div class="custom-control custom-control-inline custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup1" id="rd3" checked>
                            <label class="custom-control-label" for="rd3">Paypal</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label>Payment method</label>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup2" id="rd4" checked>
                            <label class="custom-control-label" for="rd4">Credit card</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup2" id="rd5">
                            <label class="custom-control-label" for="rd5">Debit card</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup2" id="rd6">
                            <label class="custom-control-label" for="rd6">Paypal</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label>Helper content</label>
                          <div class="custom-control custom-radio mb-1">
                            <input type="radio" class="custom-control-input" name="rdGroup3" id="rd7">
                            <label class="custom-control-label" for="rd7">Credit card</label>
                            <div class="text-muted"> This is a help text to guide users to explain the choice you will be making. </div>
                          </div>
                          <div class="custom-control custom-radio mb-1">
                            <input type="radio" class="custom-control-input" name="rdGroup3" id="rd8" checked>
                            <label class="custom-control-label" for="rd8">Paypal</label>
                            <div class="mt-1">
                              <input type="text" class="form-control" placeholder="e.g. paypal@looper.com"> </div>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label>States</label>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup4" id="rd9" disabled>
                            <label class="custom-control-label" for="rd9">Option is disabled</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input is-valid" name="rdGroup4" id="rd10">
                            <label class="custom-control-label" for="rd10">Maximal team</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input is-invalid" name="rdGroup4" id="rd11">
                            <label class="custom-control-label" for="rd11">Maximum project</label>
                            <div class="invalid-feedback">
                              <i class="fa fa-exclamation-circle fa-fw"></i> Can't update your setting, please try again. </div>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .card -->
                <section id="switcher" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <h3 class="card-title"> Switcher </h3>
                  </div>
                  <!-- /.card-body -->
                  <!-- .list-group -->
                  <div class="list-group list-group-flush list-group-bordered">
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Default</span>
                      <!-- .switcher-control -->
                      <label class="switcher-control">
                        <input type="checkbox" class="switcher-input" checked>
                        <span class="switcher-indicator"></span>
                      </label>
                      <!-- /.switcher-control -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Disabled</span>
                      <!-- .switcher-control -->
                      <label class="switcher-control">
                        <input type="checkbox" class="switcher-input" checked disabled>
                        <span class="switcher-indicator"></span>
                      </label>
                      <!-- /.switcher-control -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Success</span>
                      <!-- .switcher-control -->
                      <label class="switcher-control switcher-control-success">
                        <input type="checkbox" class="switcher-input" checked>
                        <span class="switcher-indicator"></span>
                      </label>
                      <!-- /.switcher-control -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Danger</span>
                      <!-- .switcher-control -->
                      <label class="switcher-control switcher-control-danger">
                        <input type="checkbox" class="switcher-input" checked>
                        <span class="switcher-indicator"></span>
                      </label>
                      <!-- /.switcher-control -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-header -->
                    <div class="list-group-header"> Switcher radio </div>
                    <!-- /.list-group-header -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Toggle radio #1</span>
                      <!-- .switcher-control -->
                      <label class="switcher-control">
                        <input type="radio" name="switchRadio" class="switcher-input">
                        <span class="switcher-indicator"></span>
                      </label>
                      <!-- /.switcher-control -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Toggle radio #2</span>
                      <!-- .switcher-control -->
                      <label class="switcher-control">
                        <input type="radio" name="switchRadio" class="switcher-input" checked>
                        <span class="switcher-indicator"></span>
                      </label>
                      <!-- /.switcher-control -->
                    </div>
                    <!-- /.list-group-item -->
                  </div>
                  <!-- /.list-group -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .card -->
                <section id="rating" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <h3 class="card-title"> Rating </h3>
                    <h6 class="card-subtitle text-muted"> Support all icons and colors provided by Looper </h6>
                  </div>
                  <!-- /.card-body -->
                  <!-- .list-group -->
                  <div class="list-group list-group-flush list-group-bordered">
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Default rating</span>
                      <!-- .rating -->
                      <span class="rating">
                        <input type="radio" name="rating1" id="ratingd5" value="5">
                        <label for="ratingd5">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating1" id="ratingd4" value="4">
                        <label for="ratingd4">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating1" id="ratingd3" value="3" checked>
                        <label for="ratingd3">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating1" id="ratingd2" value="2">
                        <label for="ratingd2">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating1" id="ratingd1" value="1">
                        <label for="ratingd1">
                          <span class="fa fa-star"></span>
                        </label>
                      </span>
                      <!-- /.rating -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Readonly</span>
                      <!-- .rating -->
                      <span class="rating has-readonly">
                        <input type="radio" name="rating2" id="ratingr5" value="5" disabled>
                        <label for="ratingr5">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating2" id="ratingr4" value="4" disabled checked>
                        <label for="ratingr4">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating2" id="ratingr3" value="3" disabled>
                        <label for="ratingr3">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating2" id="ratingr2" value="2" disabled>
                        <label for="ratingr2">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating2" id="ratingr1" value="1" disabled>
                        <label for="ratingr1">
                          <span class="fa fa-star"></span>
                        </label>
                      </span>
                      <!-- /.rating -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Use heart icon</span>
                      <!-- .rating -->
                      <span class="rating rating-red">
                        <input type="radio" name="rating3" id="ratingh3" value="3">
                        <label for="ratingh3">
                          <span class="fa fa-heart"></span>
                        </label>
                        <input type="radio" name="rating3" id="ratingh2" value="2" checked>
                        <label for="ratingh2">
                          <span class="fa fa-heart"></span>
                        </label>
                        <input type="radio" name="rating3" id="ratingh1" value="1">
                        <label for="ratingh1">
                          <span class="fa fa-heart"></span>
                        </label>
                      </span>
                      <!-- /.rating -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Another icon</span>
                      <!-- .rating -->
                      <span class="rating rating-teal">
                        <input type="radio" name="rating4" id="ratingt3" value="3">
                        <label for="ratingt3">
                          <span class="fa fa-trophy"></span>
                        </label>
                        <input type="radio" name="rating4" id="ratingt2" value="2" checked>
                        <label for="ratingt2">
                          <span class="fa fa-trophy"></span>
                        </label>
                        <input type="radio" name="rating4" id="ratingt1" value="1">
                        <label for="ratingt1">
                          <span class="fa fa-trophy"></span>
                        </label>
                      </span>
                      <!-- /.rating -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Toggleable single element</span>
                      <!-- .rating -->
                      <span class="rating rating-indigo">
                        <input type="checkbox" name="rating5" id="ratings1" value="1" checked>
                        <label for="ratings1">
                          <span class="fa fa-bookmark"></span>
                        </label>
                      </span>
                      <!-- /.rating -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-header -->
                    <div class="list-group-header"> Sizes </div>
                    <!-- /.list-group-header -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Small</span>
                      <!-- .rating -->
                      <span class="rating rating-sm">
                        <input type="radio" name="rating6" id="ratingSm5" value="5">
                        <label for="ratingSm5">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating6" id="ratingSm4" value="4">
                        <label for="ratingSm4">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating6" id="ratingSm3" value="3" checked>
                        <label for="ratingSm3">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating6" id="ratingSm2" value="2">
                        <label for="ratingSm2">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating6" id="ratingSm1" value="1">
                        <label for="ratingSm1">
                          <span class="fa fa-star"></span>
                        </label>
                      </span>
                      <!-- /.rating -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Large</span>
                      <!-- .rating -->
                      <span class="rating rating-lg">
                        <input type="radio" name="rating7" id="ratingLg5" value="5">
                        <label for="ratingLg5">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating7" id="ratingLg4" value="4">
                        <label for="ratingLg4">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating7" id="ratingLg3" value="3" checked>
                        <label for="ratingLg3">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating7" id="ratingLg2" value="2">
                        <label for="ratingLg2">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating7" id="ratingLg1" value="1">
                        <label for="ratingLg1">
                          <span class="fa fa-star"></span>
                        </label>
                      </span>
                      <!-- /.rating -->
                    </div>
                    <!-- /.list-group-item -->
                  </div>
                  <!-- /.list-group -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h3 id="visual-picker" class="section-title"> Visual Picker </h3>
                  <p class="text-muted"> Radio buttons, checkboxes, or links that are visually enhanced. </p>
                </div>
                <!-- /.section-block -->
                <!-- .section-block -->
                <div class="section-block text-center text-sm-left">
                  <!-- .visual-picker -->
                  <div class="visual-picker has-peek">
                    <!-- visual-picker input -->
                    <input type="checkbox" id="vpc01">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpc01">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-lg bg-info">
                          <i class="fa fa-credit-card"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Credit Card</span>
                  </div>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <div class="visual-picker has-peek">
                    <!-- visual-picker input -->
                    <input type="checkbox" id="vpc02" checked>
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpc02">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-lg bg-danger">
                          <i class="fa fa-money-bill-alt"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">My Wallet</span>
                  </div>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <div class="visual-picker has-peek">
                    <!-- visual-picker input -->
                    <input type="checkbox" id="vpc03">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpc03">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-lg bg-primary">
                          <i class="fab fa-paypal"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Paypal</span>
                  </div>
                  <!-- /.visual-picker -->
                </div>
                <!-- /.section-block -->
                <!-- .section-block -->
                <div class="section-block">
                  <h3 class="section-title"> Fluid width </h3>
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-fluid" style="max-width: 392px;">
                    <!-- visual-picker input -->
                    <input type="checkbox" id="vpc04">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpc04">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-lg bg-success">
                          <i class="oi oi-people"></i>
                        </span>
                        <span class="d-block h5 mt-2">Teams</span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                  </div>
                  <!-- /.visual-picker -->
                </div>
                <!-- /.section-block -->
                <!-- .section-block -->
                <div class="section-block text-center text-sm-left">
                  <h3 class="section-title"> Visual radio with small size </h3>
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- visual-picker input -->
                    <input type="radio" id="vpr01" name="vprSM">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpr01">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-info">
                          <i class="oi oi-person"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Accounts</span>
                  </div>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- visual-picker input -->
                    <input type="radio" id="vpr02" name="vprSM" checked>
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpr02">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-danger">
                          <i class="fa fa-money-bill-alt"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">My Wallet</span>
                  </div>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- visual-picker input -->
                    <input type="radio" id="vpr03" name="vprSM">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpr03">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-success">
                          <i class="oi oi-people"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Teams</span>
                  </div>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- visual-picker input -->
                    <input type="radio" id="vpr04" name="vprSM">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpr04">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-warning">
                          <i class="oi oi-question-mark"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Help Center</span>
                  </div>
                  <!-- /.visual-picker -->
                </div>
                <!-- /.section-block -->
                <!-- .section-block -->
                <div class="section-block text-center text-sm-left">
                  <h3 class="section-title pt-0"> Visual links </h3>
                  <!-- .visual-picker -->
                  <a href="#" class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- .visual-picker-figure -->
                    <div class="visual-picker-figure">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-info">
                          <i class="oi oi-person"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </div>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Accounts</span>
                  </a>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <a href="#" class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- .visual-picker-figure -->
                    <div class="visual-picker-figure">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-danger">
                          <i class="fa fa-money-bill-alt"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </div>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">My Wallet</span>
                  </a>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <a href="#" class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- .visual-picker-figure -->
                    <div class="visual-picker-figure">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-success">
                          <i class="oi oi-people"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </div>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Teams</span>
                  </a>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <a href="#" class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- .visual-picker-figure -->
                    <div class="visual-picker-figure">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-warning">
                          <i class="oi oi-question-mark"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </div>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Help Center</span>
                  </a>
                  <!-- /.visual-picker -->
                </div>
                <!-- /.section-block -->
                <!-- .section-block -->
                <div class="section-block text-center text-sm-left">
                  <h3 class="section-title"> Your plan </h3>
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-lg has-peek">
                    <!-- visual-picker input -->
                    <input type="radio" id="vpr05" name="vprLG">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpr05">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="h3 d-block">Free</span>
                        <span>100GB Disk Space / 2GB Bandwidth</span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Started</span>
                  </div>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-lg has-peek">
                    <!-- visual-picker input -->
                    <input type="radio" id="vpr07" name="vprLG" checked>
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpr07">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="h3 d-block">$49</span>
                        <span>500GB Disk Space / 8GB Bandwidth</span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Professional</span>
                  </div>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-lg has-peek">
                    <!-- visual-picker input -->
                    <input type="radio" id="vpr08" name="vprLG">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpr08">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="h3 d-block">$99</span>
                        <span>Unlimited Disk Space / Unlimited Bandwidth</span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Bussiness</span>
                  </div>
                  <!-- /.visual-picker -->
                </div>
                <!-- /.section-block -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h3 id="publisher" class="section-title"> Publisher </h3>
                  <p class="text-muted"> Advanced longform text input form element. </p>
                </div>
                <!-- /.section-block -->
                <!-- .section-block -->
                <div class="section-block">
                  <!-- .card -->
                  <section class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                      <!-- .publisher -->
                      <div class="publisher">
                        <label for="publisherInput1" class="publisher-label">Write something</label>
                        <!-- .publisher-input -->
                        <div class="publisher-input">
                          <textarea id="publisherInput1" class="form-control" placeholder="Write something"></textarea>
                        </div>
                        <!-- /.publisher-input -->
                        <!-- .publisher-actions -->
                        <div class="publisher-actions">
                          <!-- .publisher-tools -->
                          <div class="publisher-tools mr-auto">
                            <button type="button" class="btn btn-link fileinput-button">
                              <i class="fa fa-paperclip"></i>
                              <input type="file" id="message-attachment" name="attachment[]" multiple>
                            </button>
                            <button type="button" class="btn btn-link">
                              <i class="far fa-smile"></i>
                            </button>
                          </div>
                          <!-- /.publisher-tools -->
                          <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
                        <!-- /.publisher-actions -->
                      </div>
                      <!-- /.publisher -->
                    </div>
                    <!-- /.card-body -->
                  </section>
                  <!-- /.card -->
                  <!-- .card -->
                  <section class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                      <!-- .media -->
                      <div class="media">
                        <figure class="user-avatar user-avatar-md mr-2">
                          <img src="assets/images/avatars/uifaces18.jpg" alt="User Avatar"> </figure>
                        <!-- .media-body -->
                        <div class="media-body">
                          <!-- .publisher -->
                          <div class="publisher">
                            <label for="publisherInput2" class="publisher-label">Reply to: Beni Arisandi</label>
                            <!-- .publisher-input -->
                            <div class="publisher-input">
                              <textarea id="publisherInput2" class="form-control" placeholder="Write a comment"></textarea>
                            </div>
                            <!-- /.publisher-input -->
                            <!-- .publisher-actions -->
                            <div class="publisher-actions">
                              <!-- .publisher-tools -->
                              <div class="publisher-tools mr-auto">
                                <button type="button" class="btn btn-link fileinput-button">
                                  <i class="fa fa-paperclip"></i>
                                  <input type="file" id="message-attachment" name="attachment[]" multiple>
                                </button>
                                <button type="button" class="btn btn-link">
                                  <i class="far fa-smile"></i>
                                </button>
                              </div>
                              <!-- /.publisher-tools -->
                              <button type="submit" class="btn btn-primary">Publish</button>
                            </div>
                            <!-- /.publisher-actions -->
                          </div>
                          <!-- /.publisher -->
                        </div>
                        <!-- /.media-body -->
                      </div>
                      <!-- /.media -->
                    </div>
                    <!-- /.card-body -->
                  </section>
                  <!-- /.card -->
                  <!-- .card -->
                  <section class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                      <!-- .publisher -->
                      <div class="publisher publisher-alt">
                        <!-- .publisher-input -->
                        <div class="publisher-input">
                          <textarea class="form-control" placeholder="Write something"></textarea>
                        </div>
                        <!-- /.publisher-input -->
                        <!-- .publisher-actions -->
                        <div class="publisher-actions">
                          <!-- .publisher-tools -->
                          <div class="publisher-tools mr-auto">
                            <button type="button" class="btn btn-link fileinput-button">
                              <i class="fa fa-paperclip"></i>
                              <input type="file" id="message-attachment" name="attachment[]" multiple>
                            </button>
                            <button type="button" class="btn btn-link">
                              <i class="far fa-smile"></i>
                            </button>
                          </div>
                          <!-- /.publisher-tools -->
                          <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
                        <!-- /.publisher-actions -->
                      </div>
                      <!-- /.publisher -->
                    </div>
                    <!-- /.card-body -->
                  </section>
                  <!-- /.card -->
                  <!-- .card -->
                  <section class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                      <!-- .media -->
                      <div class="media">
                        <figure class="user-avatar user-avatar-md mr-2">
                          <img src="assets/images/avatars/profile.jpg" alt="User Avatar"> </figure>
                        <!-- .media-body -->
                        <div class="media-body">
                          <!-- .publisher -->
                          <div class="publisher publisher-alt">
                            <!-- .publisher-input -->
                            <div class="publisher-input">
                              <textarea class="form-control" placeholder="Write a comment"></textarea>
                            </div>
                            <!-- /.publisher-input -->
                            <!-- .publisher-actions -->
                            <div class="publisher-actions">
                              <!-- .publisher-tools -->
                              <div class="publisher-tools mr-auto">
                                <button type="button" class="btn btn-link fileinput-button">
                                  <i class="fa fa-paperclip"></i>
                                  <input type="file" id="message-attachment" name="attachment[]" multiple>
                                </button>
                                <button type="button" class="btn btn-link">
                                  <i class="far fa-smile"></i>
                                </button>
                              </div>
                              <!-- /.publisher-tools -->
                              <button type="submit" class="btn btn-primary">Publish</button>
                            </div>
                            <!-- /.publisher-actions -->
                          </div>
                          <!-- /.publisher -->
                        </div>
                        <!-- /.media-body -->
                      </div>
                      <!-- /.media -->
                    </div>
                    <!-- /.card-body -->
                  </section>
                  <!-- /.card -->
                  <!-- .card -->
                  <section class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                      <!-- .media -->
                      <div class="media">
                        <figure class="user-avatar user-avatar-md mr-2">
                          <img src="assets/images/avatars/uifaces9.jpg" alt="User Avatar"> </figure>
                        <!-- .media-body -->
                        <div class="media-body">
                          <!-- .publisher -->
                          <div class="publisher keep-focus focus">
                            <label for="publisherInput5" class="publisher-label">State: Always open</label>
                            <!-- .publisher-input -->
                            <div class="publisher-input">
                              <textarea id="publisherInput5" class="form-control" placeholder="Write a comment"></textarea>
                            </div>
                            <!-- /.publisher-input -->
                            <!-- .publisher-actions -->
                            <div class="publisher-actions">
                              <!-- .publisher-tools -->
                              <div class="publisher-tools mr-auto">
                                <button type="button" class="btn btn-link fileinput-button">
                                  <i class="fa fa-paperclip"></i>
                                  <input type="file" id="message-attachment" name="attachment[]" multiple>
                                </button>
                                <button type="button" class="btn btn-link">
                                  <i class="far fa-smile"></i>
                                </button>
                              </div>
                              <!-- /.publisher-tools -->
                              <button type="submit" class="btn btn-primary">Publish</button>
                            </div>
                            <!-- /.publisher-actions -->
                          </div>
                          <!-- /.publisher -->
                        </div>
                        <!-- /.media-body -->
                      </div>
                      <!-- /.media -->
                    </div>
                    <!-- /.card-body -->
                  </section>
                  <!-- /.card -->
                </div>
                <!-- /.section-block -->
                <hr class="my-5">
                <!-- .card -->
                <section id="input-group" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Prepended inputs</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi1">Prepended icon</label>
                          <!-- .input-group -->
                          <div class="input-group">
                            <label class="input-group-prepend" for="pi1">
                              <span class="input-group-text">
                                <span class="far fa-building"></span>
                              </span>
                            </label>
                            <input type="text" class="form-control" id="pi1" placeholder="e.g developer-team"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi2">Prepended icon w/ clearable</label>
                          <!-- .input-group -->
                          <div class="input-group has-clearable">
                            <button type="button" class="close" aria-label="Close">
                              <span aria-hidden="true">
                                <i class="fa fa-times-circle"></i>
                              </span>
                            </button>
                            <label class="input-group-prepend" for="pi2">
                              <span class="input-group-text">
                                <span class="oi oi-magnifying-glass"></span>
                              </span>
                            </label>
                            <input type="text" class="form-control" id="pi2" placeholder="Type something..." value="Moonlight"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi3">Prepended text</label>
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <div class="input-group-prepend">
                              <span class="input-group-text">http://</span>
                            </div>
                            <input type="text" class="form-control" id="pi3" placeholder="uselooper.com"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi4">Prepended label</label>
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <label class="input-group-prepend" for="pi4">
                              <span class="input-group-text">Email address:</span>
                            </label>
                            <input type="email" class="form-control" id="pi4" placeholder="johndoe@looper.com"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi5">Prepended select</label>
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <div class="input-group-prepend">
                              <select class="custom-select">
                                <option value=""> Country </option>
                                <option value="1" selected> United States (+1) </option>
                              </select>
                            </div>
                            <input type="text" class="form-control" id="pi5" placeholder="(201) 555-0123"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi6">Prepended select & icon</label>
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <!-- .input-group-prepend -->
                            <div class="input-group-prepend">
                              <select class="custom-select">
                                <option value=""> Filter By </option>
                                <option value="1"> Tags </option>
                                <option value="2"> Vendor </option>
                                <option value="3"> Variants </option>
                                <option value="4"> Prices </option>
                                <option value="5"> Sales </option>
                              </select>
                            </div>
                            <!-- /.input-group-prepend -->
                            <!-- .input-group -->
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <span class="oi oi-magnifying-glass"></span>
                                </span>
                              </div>
                              <input type="text" class="form-control" id="pi6" placeholder="Search record"> </div>
                            <!-- /.input-group -->
                          </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi7">Prepended button</label>
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <div class="input-group-prepend">
                              <button class="btn btn-secondary" type="button">Look Up</button>
                            </div>
                            <input type="text" class="form-control" id="pi7"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi8">Prepended button & icon</label>
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <div class="input-group-prepend dropdown">
                              <button class="btn btn-secondary" type="button" data-toggle="dropdown">Filter by
                                <span class="caret"></span>
                              </button>
                              <div class="dropdown-arrow"></div>
                              <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Price</a>
                                <a href="#" class="dropdown-item">Trending</a>
                                <a href="#" class="dropdown-item">Orders</a>
                                <a href="#" class="dropdown-item">Likes</a>
                              </div>
                            </div>
                            <!-- .input-group -->
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <span class="oi oi-magnifying-glass"></span>
                                </span>
                              </div>
                              <input type="text" class="form-control" id="pi8" placeholder="Search"> </div>
                            <!-- /.input-group -->
                          </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi9">Prepended badge</label>
                          <!-- .input-group -->
                          <div class="input-group">
                            <label class="input-group-prepend" for="pi9">
                              <span class="badge">$</span>
                            </label>
                            <input type="text" class="form-control" id="pi9"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi10">Prepended multiple badge</label>
                          <!-- .input-group -->
                          <div class="input-group">
                            <label class="input-group-prepend" for="pi10">
                              <span class="badge">apple
                                <a href="#" data-dismiss="badge">×</a>
                              </span>
                              <span class="badge">banana
                                <a href="#">×</a>
                              </span>
                            </label>
                            <input type="text" class="form-control" id="pi10"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <!-- .card -->
                <section class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Appended inputs</legend>
                        <p class="text-muted"> Can do what prepended inputs does. </p>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="ai1">Appended icon</label>
                          <!-- .input-group -->
                          <div class="input-group">
                            <input type="text" class="form-control" id="ai1" placeholder="e.g developer-team">
                            <label class="input-group-append" for="ai1">
                              <span class="input-group-text">
                                <span class="far fa-building"></span>
                              </span>
                            </label>
                          </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="ai2">Appended text</label>
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <input type="text" class="form-control" id="ai2" placeholder="Subscription fee">
                            <div class="input-group-append">
                              <span class="input-group-text">$ / month</span>
                            </div>
                          </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <!-- .card -->
                <section id="input-group" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Both inputs</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <!-- .input-group -->
                          <div class="input-group">
                            <label class="input-group-prepend" for="bi1">
                              <span class="input-group-text">http://</span>
                            </label>
                            <input type="text" class="form-control" id="bi1" placeholder="e.g. uselooper">
                            <div class="input-group-append">
                              <span class="input-group-text">@domain.com</span>
                            </div>
                          </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <label class="input-group-prepend" for="bi2">
                              <span class="input-group-text">http://</span>
                            </label>
                            <input type="text" class="form-control" id="bi2" placeholder="e.g. uselooper">
                            <div class="input-group-append">
                              <span class="input-group-text">@domain.com</span>
                            </div>
                          </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <!-- .input-group -->
                          <div class="input-group">
                            <label class="input-group-prepend" for="bi3">
                              <span class="badge">$</span>
                            </label>
                            <input type="number" class="form-control" id="bi3" placeholder="Amount (to the nearest dollar)">
                            <label class="input-group-append">
                              <span class="badge">.00</span>
                            </label>
                          </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h3 id="validation-states" class="section-title"> Validations </h3>
                  <p class="text-muted"> Provide valuable, actionable feedback to your users with HTML5 form validation. Choose from the browser default validation feedback, or implement custom messages with our built-in classes and starter JavaScript. </p>
                </div>
                <!-- /.section-block -->
                <!-- .card -->
                <section class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <h4 class="card-title"> Billing address </h4>
                    <!-- form .needs-validation -->
                    <form class="needs-validation" novalidate="">
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <label for="firstName">First name</label>
                          <input type="text" class="form-control" id="firstName" required="">
                          <div class="invalid-feedback"> Valid first name is required. </div>
                        </div>
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <label for="lastName">Last name</label>
                          <input type="text" class="form-control" id="lastName" required="">
                          <div class="invalid-feedback"> Valid last name is required. </div>
                        </div>
                        <!-- /grid column -->
                      </div>
                      <!-- /.form-row -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" required="">
                        <div class="invalid-feedback"> Your username is required. </div>
                      </div>
                      <!-- /.form-group -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="email">Email
                          <span class="badge badge-secondary">
                            <em>Optional</em>
                          </span>
                        </label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                      </div>
                      <!-- /.form-group -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                        <div class="invalid-feedback"> Please enter your shipping address. </div>
                      </div>
                      <!-- /.form-group -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="address2">Address 2
                          <span class="badge badge-secondary">
                            <em>Optional</em>
                          </span>
                        </label>
                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite"> </div>
                      <!-- /.form-group -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-5 mb-3">
                          <label for="country">Country</label>
                          <select class="custom-select d-block w-100" id="country" required="">
                            <option value=""> Choose... </option>
                            <option> United States </option>
                          </select>
                          <div class="invalid-feedback"> Please select a valid country. </div>
                        </div>
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-4 mb-3">
                          <label for="state">State</label>
                          <select class="custom-select d-block w-100" id="state" required="">
                            <option value=""> Choose... </option>
                            <option> California </option>
                          </select>
                          <div class="invalid-feedback"> Please provide a valid state. </div>
                        </div>
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label for="zip">Zip</label>
                          <input type="text" class="form-control" id="zip" required="">
                          <div class="invalid-feedback"> Zip code required. </div>
                        </div>
                        <!-- /grid column -->
                      </div>
                      <!-- /.form-row -->
                      <hr class="mb-4">
                      <!-- .form-group -->
                      <div class="form-group">
                        <!-- .custom-control -->
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="same-address">
                          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>
                        <!-- /.custom-control -->
                        <!-- .custom-control -->
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="save-info">
                          <label class="custom-control-label" for="save-info">Save this information for next time</label>
                        </div>
                        <!-- /.custom-control -->
                      </div>
                      <!-- /.form-group -->
                      <hr class="mb-4">
                      <h4 class="card-title"> Payment </h4>
                      <!-- .form-group -->
                      <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required="">
                          <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                          <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                          <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                      </div>
                      <!-- /.form-group -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <label for="cc-name">Name on card</label>
                          <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                          <small class="text-muted">Full name as displayed on card</small>
                          <div class="invalid-feedback"> Name on card is required </div>
                        </div>
                        <!-- /grid column -->
                        <!-- /grid column -->
                        <div class="col-md-6 mb-3">
                          <label for="cc-number">Credit card number</label>
                          <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                          <div class="invalid-feedback"> Credit card number is required </div>
                        </div>
                        <!-- /grid column -->
                      </div>
                      <!-- /.form-row -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label for="cc-expiration">Expiration</label>
                          <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                          <div class="invalid-feedback"> Expiration date required </div>
                        </div>
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label for="cc-cvv">CVV</label>
                          <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                          <div class="invalid-feedback"> Security code required </div>
                        </div>
                        <!-- /grid column -->
                      </div>
                      <!-- /.form-row -->
                      <hr class="mb-4">
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                    </form>
                    <!-- /form .needs-validation -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <!-- .card -->
                <section class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <h3 class="card-title"> Feedback tooltip </h3>
                    <!-- form .needs-validation -->
                    <form class="needs-validation" novalidate="">
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- form grid -->
                        <div class="col-md-6 mb-3">
                          <label for="validationTooltip01">First name
                            <abbr title="Required">*</abbr>
                          </label>
                          <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required="">
                          <div class="valid-tooltip"> Looks good! </div>
                        </div>
                        <!-- /form grid -->
                        <!-- form grid -->
                        <div class="col-md-6 mb-3">
                          <label for="validationTooltip02">Last name
                            <abbr title="Required">*</abbr>
                          </label>
                          <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required="">
                          <div class="valid-tooltip"> Looks good! </div>
                        </div>
                        <!-- /form grid -->
                        <!-- form grid -->
                        <div class="col-md-12 mb-3">
                          <label for="validationTooltipUsername">Username
                            <abbr title="Required">*</abbr>
                          </label>
                          <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                          <div class="invalid-tooltip"> Please choose a username. </div>
                        </div>
                        <!-- /form grid -->
                      </div>
                      <!-- /.form-row -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-5 mb-3">
                          <label for="validationTooltipCountry">Country
                            <abbr title="Required">*</abbr>
                          </label>
                          <select class="custom-select d-block w-100" id="validationTooltipCountry" required="">
                            <option value=""> Choose... </option>
                            <option> United States </option>
                          </select>
                          <div class="invalid-feedback"> Please select a valid country. </div>
                        </div>
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-4 mb-3">
                          <label for="validationTooltipState">State
                            <abbr title="Required">*</abbr>
                          </label>
                          <select class="custom-select d-block w-100" id="validationTooltipState" required="">
                            <option value=""> Choose... </option>
                            <option> California </option>
                          </select>
                          <div class="invalid-feedback"> Please provide a valid state. </div>
                        </div>
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label for="validationTooltipZip">Zip
                            <abbr title="Required">*</abbr>
                          </label>
                          <input type="text" class="form-control" id="validationTooltipZip" required="">
                          <div class="invalid-feedback"> Zip code required. </div>
                        </div>
                        <!-- /grid column -->
                      </div>
                      <!-- /.form-row -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input" id="validationTooltip06" required="">
                          <label class="custom-control-label" for="validationTooltip06">Agree to terms and conditions</label>
                          <div class="invalid-tooltip"> You must agree before submitting. </div>
                        </div>
                      </div>
                      <!-- /.form-group -->
                      <!-- .form-actions -->
                      <div class="form-actions">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                      </div>
                      <!-- /.form-actions -->
                    </form>
                    <!-- /form .needs-validation -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
              </div>
              <!-- /.page-section -->
            </div>
            <!-- /.page-inner -->
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
                <h1 class="page-title"> Basic Elements </h1>
              </header>
              <!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <div class="d-xl-none">
                  <button class="btn btn-danger btn-floated" type="button" data-toggle="sidebar">
                    <i class="fa fa-th-list"></i>
                  </button>
                </div>
                <!-- .card -->
                <section id="base-style" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Base style</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf1">Email address</label>
                          <input type="email" class="form-control" id="tf1" aria-describedby="tf1Help" placeholder="e.g. johndoe@looper.com">
                          <small id="tf1Help" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf2">Number input</label>
                          <input type="number" class="form-control" id="tf2" placeholder="Amount (to the nearest dollar)"> </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf3">File input</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="tf3" multiple>
                            <label class="custom-file-label" for="tf3">Choose file</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf4">Clearable</label>
                          <div class="has-clearable">
                            <button type="button" class="close" aria-label="Close">
                              <span aria-hidden="true">
                                <i class="fa fa-times-circle"></i>
                              </span>
                            </button>
                            <input type="text" class="form-control" id="tf4" placeholder="Type something..." value="Moonlight"> </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="tf5">Textarea</label>
                          <textarea class="form-control" id="tf5" rows="3"></textarea>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>States</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="tfDisabled">Disabled input</label>
                          <input class="form-control" id="tfDisabled" type="email" placeholder="e.g. johndoe@looper.com" disabled> </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="control-label" for="tfReadonly">Readonly input</label>
                          <input class="form-control" id="tfReadonly" type="text" value="Stilearning" readonly> </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="form-control-label" for="tfValid">Valid input</label>
                          <input type="text" class="form-control is-valid" id="tfValid">
                          <div class="valid-feedback"> Success! You've done it. </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="form-control-label" for="tfInvalid">Invalid input</label>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input is-invalid" id="tfInvalid">
                            <label class="custom-file-label" for="tfInvalid">Choose file</label>
                            <div class="invalid-feedback">
                              <i class="fa fa-exclamation-circle fa-fw"></i> Sorry, the image must be at least 300×300. </div>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Sizes</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label col-form-label-sm" for="tfSmall">Small input</label>
                          <input class="form-control form-control-sm" type="text" placeholder=".form-control-sm" id="tfSmall"> </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label" for="tfDefault">Default input</label>
                          <input type="text" class="form-control" placeholder="Default input" id="tfDefault"> </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label col-form-label-lg" for="tfLarge">Large input</label>
                          <input class="form-control form-control-lg" type="text" placeholder=".form-control-lg" id="tfLarge"> </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .card -->
                <section id="labels" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Labels</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="lbl1">Project name
                            <abbr title="Required">*</abbr>
                          </label>
                          <input type="text" class="form-control" id="lbl1" placeholder="Required asterisks" required=""> </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="lbl2">Project name
                            <span class="badge badge-danger">Required</span>
                          </label>
                          <input type="text" class="form-control" id="lbl2" placeholder="Required label" required=""> </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="lbl3">Description
                            <span class="badge badge-secondary">
                              <em>Optional</em>
                            </span>
                          </label>
                          <textarea class="form-control" id="lbl3" rows="3" placeholder="Optional label"></textarea>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="d-flex justify-content-between" for="lbl4">
                            <span>Description</span>
                            <span class="text-muted">0 of 80 characters used</span>
                          </label>
                          <textarea class="form-control" id="lbl4" rows="3" placeholder="Label with description"></textarea>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="d-flex justify-content-between" for="lbl5">
                            <span>Password</span>
                            <a href="#lbl5" data-toggle="password">
                              <i class="fa fa-eye fa-fw"></i>
                              <span>Show</span>
                            </a>
                          </label>
                          <input type="password" class="form-control" value="label_with_action" id="lbl5"> </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .card -->
                <section id="floating-label" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Floating label</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <div class="form-label-group">
                            <input type="email" class="form-control" id="fl1" value="johndoe@looper.com" placeholder="Email address" required="">
                            <label for="fl1">Email address</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <div class="form-label-group">
                            <input type="password" class="form-control" id="fl2" placeholder="Password" required="">
                            <label for="fl2">Password</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>States</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <div class="form-label-group">
                            <input type="email" class="form-control" id="fl3" placeholder="Email address" disabled>
                            <label for="fl3">Email address</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <div class="form-label-group">
                            <input type="email" class="form-control" id="fl4" value="readonly@looper.com" placeholder="Email address" readonly>
                            <label for="fl4">Email address</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <div class="form-label-group">
                            <input type="email" class="form-control is-valid" id="fl5" value="johndoe@looper.com" placeholder="Email address">
                            <label for="fl5">Email address</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <div class="form-label-group">
                            <input type="password" class="form-control is-invalid" id="fl6" value="secrettt" placeholder="Password">
                            <label for="fl6">Password</label>
                            <div class="invalid-feedback">
                              <i class="fa fa-exclamation-circle fa-fw"></i> Sorry, that password isn't right. </div>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .card -->
                <section id="selects" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Selects</legend>
                        <!-- grid row -->
                        <div class="row">
                          <!-- grid column -->
                          <div class="col-md-6">
                            <!-- .form-group -->
                            <div class="form-group">
                              <label for="sel1">Country</label>
                              <select class="custom-select" id="sel1" required="">
                                <option value=""> Choose... </option>
                                <option> United States </option>
                              </select>
                            </div>
                            <!-- /.form-group -->
                          </div>
                          <!-- /grid column -->
                          <!-- grid column -->
                          <div class="col-md-6">
                            <div class="form-group">
                              <label for="sel2">State</label>
                              <select class="custom-select" id="sel2" required="">
                                <option value=""> Choose... </option>
                                <option> California </option>
                              </select>
                            </div>
                          </div>
                          <!-- /grid column -->
                        </div>
                        <!-- /grid row -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>States</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="sel3">Country</label>
                          <select class="custom-select" id="sel3" required="" disabled>
                            <option value=""> Choose... </option>
                            <option selected> United States </option>
                          </select>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="sel4">Country</label>
                          <select class="custom-select is-valid" id="sel4" required="">
                            <option value=""> Choose... </option>
                            <option selected> United States </option>
                          </select>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="sel5">State</label>
                          <select class="custom-select is-invalid" id="sel5" required="">
                            <option value=""> Choose... </option>
                            <option> California </option>
                          </select>
                          <div class="invalid-feedback">
                            <i class="fa fa-exclamation-circle fa-fw"></i> Please select your state. </div>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Sizes</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label col-form-label-sm" for="selSmall">Small select</label>
                          <select class="custom-select custom-select-sm" id="selSmall">
                            <option> Small select </option>
                          </select>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label" for="selDefault">Default select</label>
                          <select class="custom-select" id="selDefault">
                            <option> Default select </option>
                          </select>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="col-form-label col-form-label-lg" for="selLarge">Large select</label>
                          <select class="custom-select custom-select-lg" id="selLarge">
                            <option> Large select </option>
                          </select>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .card -->
                <section id="checkboxes" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Checkboxes</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="d-block">Inline checkbox</label>
                          <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ckb1">
                            <label class="custom-control-label" for="ckb1">Basic checkbox</label>
                          </div>
                          <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ckb2" indeterminate="">
                            <label class="custom-control-label" for="ckb2">Indeterminate</label>
                          </div>
                          <div class="custom-control custom-control-inline custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ckb3" checked>
                            <label class="custom-control-label" for="ckb3">Checked</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="d-block">Hidden label</label>
                          <div class="custom-control-stacked">
                            <div class="custom-control custom-control-inline custom-control-nolabel custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="ckb4">
                              <label class="custom-control-label" for="ckb4">Basic checkbox</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-control-nolabel custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="ckb5" indeterminate="">
                              <label class="custom-control-label" for="ckb5">Indeterminate</label>
                            </div>
                            <div class="custom-control custom-control-inline custom-control-nolabel custom-checkbox">
                              <input type="checkbox" class="custom-control-input" id="ckb6" checked>
                              <label class="custom-control-label" for="ckb6">Checked</label>
                            </div>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label>Available for block?</label>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ckb7">
                            <label class="custom-control-label" for="ckb7">Yes, this is a block checkbox</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label>Helper content</label>
                          <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="ckb8">
                            <label class="custom-control-label" for="ckb8">Shipping address is the same as my billing address</label>
                            <div class="text-muted"> Reduces the number of fields required to check out. The billing address can still be edited. </div>
                          </div>
                          <div class="custom-control custom-checkbox mb-1">
                            <input type="checkbox" class="custom-control-input" id="ckb9">
                            <label class="custom-control-label" for="ckb9">Save this information for next time</label>
                            <div class="text-muted"> This is a help text to guide users to explain the choice you will be making. </div>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label>States</label>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="ckb10" disabled>
                            <label class="custom-control-label" for="ckb10">Option is disabled</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input is-valid" id="ckb11">
                            <label class="custom-control-label" for="ckb11">Maximal project</label>
                          </div>
                          <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input is-invalid" id="ckb12">
                            <label class="custom-control-label" for="ckb12">Autosave</label>
                            <div class="invalid-feedback">
                              <i class="fa fa-exclamation-circle fa-fw"></i> Can't update your setting, please try again. </div>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .card -->
                <section id="radios" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Radios</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label class="d-block">Inline radio</label>
                          <div class="custom-control custom-control-inline custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup1" id="rd1">
                            <label class="custom-control-label" for="rd1">Credit card</label>
                          </div>
                          <div class="custom-control custom-control-inline custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup1" id="rd2">
                            <label class="custom-control-label" for="rd2">Debit card</label>
                          </div>
                          <div class="custom-control custom-control-inline custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup1" id="rd3" checked>
                            <label class="custom-control-label" for="rd3">Paypal</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label>Payment method</label>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup2" id="rd4" checked>
                            <label class="custom-control-label" for="rd4">Credit card</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup2" id="rd5">
                            <label class="custom-control-label" for="rd5">Debit card</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup2" id="rd6">
                            <label class="custom-control-label" for="rd6">Paypal</label>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label>Helper content</label>
                          <div class="custom-control custom-radio mb-1">
                            <input type="radio" class="custom-control-input" name="rdGroup3" id="rd7">
                            <label class="custom-control-label" for="rd7">Credit card</label>
                            <div class="text-muted"> This is a help text to guide users to explain the choice you will be making. </div>
                          </div>
                          <div class="custom-control custom-radio mb-1">
                            <input type="radio" class="custom-control-input" name="rdGroup3" id="rd8" checked>
                            <label class="custom-control-label" for="rd8">Paypal</label>
                            <div class="mt-1">
                              <input type="text" class="form-control" placeholder="e.g. paypal@looper.com"> </div>
                          </div>
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label>States</label>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input" name="rdGroup4" id="rd9" disabled>
                            <label class="custom-control-label" for="rd9">Option is disabled</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input is-valid" name="rdGroup4" id="rd10">
                            <label class="custom-control-label" for="rd10">Maximal team</label>
                          </div>
                          <div class="custom-control custom-radio">
                            <input type="radio" class="custom-control-input is-invalid" name="rdGroup4" id="rd11">
                            <label class="custom-control-label" for="rd11">Maximum project</label>
                            <div class="invalid-feedback">
                              <i class="fa fa-exclamation-circle fa-fw"></i> Can't update your setting, please try again. </div>
                          </div>
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .card -->
                <section id="switcher" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <h3 class="card-title"> Switcher </h3>
                  </div>
                  <!-- /.card-body -->
                  <!-- .list-group -->
                  <div class="list-group list-group-flush list-group-bordered">
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Default</span>
                      <!-- .switcher-control -->
                      <label class="switcher-control">
                        <input type="checkbox" class="switcher-input" checked>
                        <span class="switcher-indicator"></span>
                      </label>
                      <!-- /.switcher-control -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Disabled</span>
                      <!-- .switcher-control -->
                      <label class="switcher-control">
                        <input type="checkbox" class="switcher-input" checked disabled>
                        <span class="switcher-indicator"></span>
                      </label>
                      <!-- /.switcher-control -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Success</span>
                      <!-- .switcher-control -->
                      <label class="switcher-control switcher-control-success">
                        <input type="checkbox" class="switcher-input" checked>
                        <span class="switcher-indicator"></span>
                      </label>
                      <!-- /.switcher-control -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Danger</span>
                      <!-- .switcher-control -->
                      <label class="switcher-control switcher-control-danger">
                        <input type="checkbox" class="switcher-input" checked>
                        <span class="switcher-indicator"></span>
                      </label>
                      <!-- /.switcher-control -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-header -->
                    <div class="list-group-header"> Switcher radio </div>
                    <!-- /.list-group-header -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Toggle radio #1</span>
                      <!-- .switcher-control -->
                      <label class="switcher-control">
                        <input type="radio" name="switchRadio" class="switcher-input">
                        <span class="switcher-indicator"></span>
                      </label>
                      <!-- /.switcher-control -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Toggle radio #2</span>
                      <!-- .switcher-control -->
                      <label class="switcher-control">
                        <input type="radio" name="switchRadio" class="switcher-input" checked>
                        <span class="switcher-indicator"></span>
                      </label>
                      <!-- /.switcher-control -->
                    </div>
                    <!-- /.list-group-item -->
                  </div>
                  <!-- /.list-group -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .card -->
                <section id="rating" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <h3 class="card-title"> Rating </h3>
                    <h6 class="card-subtitle text-muted"> Support all icons and colors provided by Looper </h6>
                  </div>
                  <!-- /.card-body -->
                  <!-- .list-group -->
                  <div class="list-group list-group-flush list-group-bordered">
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Default rating</span>
                      <!-- .rating -->
                      <span class="rating">
                        <input type="radio" name="rating1" id="ratingd5" value="5">
                        <label for="ratingd5">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating1" id="ratingd4" value="4">
                        <label for="ratingd4">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating1" id="ratingd3" value="3" checked>
                        <label for="ratingd3">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating1" id="ratingd2" value="2">
                        <label for="ratingd2">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating1" id="ratingd1" value="1">
                        <label for="ratingd1">
                          <span class="fa fa-star"></span>
                        </label>
                      </span>
                      <!-- /.rating -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Readonly</span>
                      <!-- .rating -->
                      <span class="rating has-readonly">
                        <input type="radio" name="rating2" id="ratingr5" value="5" disabled>
                        <label for="ratingr5">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating2" id="ratingr4" value="4" disabled checked>
                        <label for="ratingr4">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating2" id="ratingr3" value="3" disabled>
                        <label for="ratingr3">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating2" id="ratingr2" value="2" disabled>
                        <label for="ratingr2">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating2" id="ratingr1" value="1" disabled>
                        <label for="ratingr1">
                          <span class="fa fa-star"></span>
                        </label>
                      </span>
                      <!-- /.rating -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Use heart icon</span>
                      <!-- .rating -->
                      <span class="rating rating-red">
                        <input type="radio" name="rating3" id="ratingh3" value="3">
                        <label for="ratingh3">
                          <span class="fa fa-heart"></span>
                        </label>
                        <input type="radio" name="rating3" id="ratingh2" value="2" checked>
                        <label for="ratingh2">
                          <span class="fa fa-heart"></span>
                        </label>
                        <input type="radio" name="rating3" id="ratingh1" value="1">
                        <label for="ratingh1">
                          <span class="fa fa-heart"></span>
                        </label>
                      </span>
                      <!-- /.rating -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Another icon</span>
                      <!-- .rating -->
                      <span class="rating rating-teal">
                        <input type="radio" name="rating4" id="ratingt3" value="3">
                        <label for="ratingt3">
                          <span class="fa fa-trophy"></span>
                        </label>
                        <input type="radio" name="rating4" id="ratingt2" value="2" checked>
                        <label for="ratingt2">
                          <span class="fa fa-trophy"></span>
                        </label>
                        <input type="radio" name="rating4" id="ratingt1" value="1">
                        <label for="ratingt1">
                          <span class="fa fa-trophy"></span>
                        </label>
                      </span>
                      <!-- /.rating -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Toggleable single element</span>
                      <!-- .rating -->
                      <span class="rating rating-indigo">
                        <input type="checkbox" name="rating5" id="ratings1" value="1" checked>
                        <label for="ratings1">
                          <span class="fa fa-bookmark"></span>
                        </label>
                      </span>
                      <!-- /.rating -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-header -->
                    <div class="list-group-header"> Sizes </div>
                    <!-- /.list-group-header -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Small</span>
                      <!-- .rating -->
                      <span class="rating rating-sm">
                        <input type="radio" name="rating6" id="ratingSm5" value="5">
                        <label for="ratingSm5">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating6" id="ratingSm4" value="4">
                        <label for="ratingSm4">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating6" id="ratingSm3" value="3" checked>
                        <label for="ratingSm3">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating6" id="ratingSm2" value="2">
                        <label for="ratingSm2">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating6" id="ratingSm1" value="1">
                        <label for="ratingSm1">
                          <span class="fa fa-star"></span>
                        </label>
                      </span>
                      <!-- /.rating -->
                    </div>
                    <!-- /.list-group-item -->
                    <!-- .list-group-item -->
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                      <span>Large</span>
                      <!-- .rating -->
                      <span class="rating rating-lg">
                        <input type="radio" name="rating7" id="ratingLg5" value="5">
                        <label for="ratingLg5">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating7" id="ratingLg4" value="4">
                        <label for="ratingLg4">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating7" id="ratingLg3" value="3" checked>
                        <label for="ratingLg3">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating7" id="ratingLg2" value="2">
                        <label for="ratingLg2">
                          <span class="fa fa-star"></span>
                        </label>
                        <input type="radio" name="rating7" id="ratingLg1" value="1">
                        <label for="ratingLg1">
                          <span class="fa fa-star"></span>
                        </label>
                      </span>
                      <!-- /.rating -->
                    </div>
                    <!-- /.list-group-item -->
                  </div>
                  <!-- /.list-group -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h3 id="visual-picker" class="section-title"> Visual Picker </h3>
                  <p class="text-muted"> Radio buttons, checkboxes, or links that are visually enhanced. </p>
                </div>
                <!-- /.section-block -->
                <!-- .section-block -->
                <div class="section-block text-center text-sm-left">
                  <!-- .visual-picker -->
                  <div class="visual-picker has-peek">
                    <!-- visual-picker input -->
                    <input type="checkbox" id="vpc01">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpc01">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-lg bg-info">
                          <i class="fa fa-credit-card"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Credit Card</span>
                  </div>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <div class="visual-picker has-peek">
                    <!-- visual-picker input -->
                    <input type="checkbox" id="vpc02" checked>
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpc02">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-lg bg-danger">
                          <i class="fa fa-money-bill-alt"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">My Wallet</span>
                  </div>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <div class="visual-picker has-peek">
                    <!-- visual-picker input -->
                    <input type="checkbox" id="vpc03">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpc03">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-lg bg-primary">
                          <i class="fab fa-paypal"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Paypal</span>
                  </div>
                  <!-- /.visual-picker -->
                </div>
                <!-- /.section-block -->
                <!-- .section-block -->
                <div class="section-block">
                  <h3 class="section-title"> Fluid width </h3>
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-fluid" style="max-width: 392px;">
                    <!-- visual-picker input -->
                    <input type="checkbox" id="vpc04">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpc04">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-lg bg-success">
                          <i class="oi oi-people"></i>
                        </span>
                        <span class="d-block h5 mt-2">Teams</span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                  </div>
                  <!-- /.visual-picker -->
                </div>
                <!-- /.section-block -->
                <!-- .section-block -->
                <div class="section-block text-center text-sm-left">
                  <h3 class="section-title"> Visual radio with small size </h3>
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- visual-picker input -->
                    <input type="radio" id="vpr01" name="vprSM">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpr01">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-info">
                          <i class="oi oi-person"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Accounts</span>
                  </div>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- visual-picker input -->
                    <input type="radio" id="vpr02" name="vprSM" checked>
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpr02">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-danger">
                          <i class="fa fa-money-bill-alt"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">My Wallet</span>
                  </div>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- visual-picker input -->
                    <input type="radio" id="vpr03" name="vprSM">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpr03">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-success">
                          <i class="oi oi-people"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Teams</span>
                  </div>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- visual-picker input -->
                    <input type="radio" id="vpr04" name="vprSM">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpr04">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-warning">
                          <i class="oi oi-question-mark"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Help Center</span>
                  </div>
                  <!-- /.visual-picker -->
                </div>
                <!-- /.section-block -->
                <!-- .section-block -->
                <div class="section-block text-center text-sm-left">
                  <h3 class="section-title pt-0"> Visual links </h3>
                  <!-- .visual-picker -->
                  <a href="#" class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- .visual-picker-figure -->
                    <div class="visual-picker-figure">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-info">
                          <i class="oi oi-person"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </div>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Accounts</span>
                  </a>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <a href="#" class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- .visual-picker-figure -->
                    <div class="visual-picker-figure">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-danger">
                          <i class="fa fa-money-bill-alt"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </div>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">My Wallet</span>
                  </a>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <a href="#" class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- .visual-picker-figure -->
                    <div class="visual-picker-figure">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-success">
                          <i class="oi oi-people"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </div>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Teams</span>
                  </a>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <a href="#" class="visual-picker visual-picker-sm has-peek px-3">
                    <!-- .visual-picker-figure -->
                    <div class="visual-picker-figure">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="tile tile-sm bg-warning">
                          <i class="oi oi-question-mark"></i>
                        </span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </div>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Help Center</span>
                  </a>
                  <!-- /.visual-picker -->
                </div>
                <!-- /.section-block -->
                <!-- .section-block -->
                <div class="section-block text-center text-sm-left">
                  <h3 class="section-title"> Your plan </h3>
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-lg has-peek">
                    <!-- visual-picker input -->
                    <input type="radio" id="vpr05" name="vprLG">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpr05">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="h3 d-block">Free</span>
                        <span>100GB Disk Space / 2GB Bandwidth</span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Started</span>
                  </div>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-lg has-peek">
                    <!-- visual-picker input -->
                    <input type="radio" id="vpr07" name="vprLG" checked>
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpr07">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="h3 d-block">$49</span>
                        <span>500GB Disk Space / 8GB Bandwidth</span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Professional</span>
                  </div>
                  <!-- /.visual-picker -->
                  <!-- .visual-picker -->
                  <div class="visual-picker visual-picker-lg has-peek">
                    <!-- visual-picker input -->
                    <input type="radio" id="vpr08" name="vprLG">
                    <!-- .visual-picker-figure -->
                    <label class="visual-picker-figure" for="vpr08">
                      <!-- .visual-picker-content -->
                      <span class="visual-picker-content">
                        <span class="h3 d-block">$99</span>
                        <span>Unlimited Disk Space / Unlimited Bandwidth</span>
                      </span>
                      <!-- /.visual-picker-content -->
                    </label>
                    <!-- /.visual-picker-figure -->
                    <!-- .visual-picker-peek -->
                    <span class="visual-picker-peek">Bussiness</span>
                  </div>
                  <!-- /.visual-picker -->
                </div>
                <!-- /.section-block -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h3 id="publisher" class="section-title"> Publisher </h3>
                  <p class="text-muted"> Advanced longform text input form element. </p>
                </div>
                <!-- /.section-block -->
                <!-- .section-block -->
                <div class="section-block">
                  <!-- .card -->
                  <section class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                      <!-- .publisher -->
                      <div class="publisher">
                        <label for="publisherInput1" class="publisher-label">Write something</label>
                        <!-- .publisher-input -->
                        <div class="publisher-input">
                          <textarea id="publisherInput1" class="form-control" placeholder="Write something"></textarea>
                        </div>
                        <!-- /.publisher-input -->
                        <!-- .publisher-actions -->
                        <div class="publisher-actions">
                          <!-- .publisher-tools -->
                          <div class="publisher-tools mr-auto">
                            <button type="button" class="btn btn-link fileinput-button">
                              <i class="fa fa-paperclip"></i>
                              <input type="file" id="message-attachment" name="attachment[]" multiple>
                            </button>
                            <button type="button" class="btn btn-link">
                              <i class="far fa-smile"></i>
                            </button>
                          </div>
                          <!-- /.publisher-tools -->
                          <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
                        <!-- /.publisher-actions -->
                      </div>
                      <!-- /.publisher -->
                    </div>
                    <!-- /.card-body -->
                  </section>
                  <!-- /.card -->
                  <!-- .card -->
                  <section class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                      <!-- .media -->
                      <div class="media">
                        <figure class="user-avatar user-avatar-md mr-2">
                          <img src="assets/images/avatars/uifaces18.jpg" alt="User Avatar"> </figure>
                        <!-- .media-body -->
                        <div class="media-body">
                          <!-- .publisher -->
                          <div class="publisher">
                            <label for="publisherInput2" class="publisher-label">Reply to: Beni Arisandi</label>
                            <!-- .publisher-input -->
                            <div class="publisher-input">
                              <textarea id="publisherInput2" class="form-control" placeholder="Write a comment"></textarea>
                            </div>
                            <!-- /.publisher-input -->
                            <!-- .publisher-actions -->
                            <div class="publisher-actions">
                              <!-- .publisher-tools -->
                              <div class="publisher-tools mr-auto">
                                <button type="button" class="btn btn-link fileinput-button">
                                  <i class="fa fa-paperclip"></i>
                                  <input type="file" id="message-attachment" name="attachment[]" multiple>
                                </button>
                                <button type="button" class="btn btn-link">
                                  <i class="far fa-smile"></i>
                                </button>
                              </div>
                              <!-- /.publisher-tools -->
                              <button type="submit" class="btn btn-primary">Publish</button>
                            </div>
                            <!-- /.publisher-actions -->
                          </div>
                          <!-- /.publisher -->
                        </div>
                        <!-- /.media-body -->
                      </div>
                      <!-- /.media -->
                    </div>
                    <!-- /.card-body -->
                  </section>
                  <!-- /.card -->
                  <!-- .card -->
                  <section class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                      <!-- .publisher -->
                      <div class="publisher publisher-alt">
                        <!-- .publisher-input -->
                        <div class="publisher-input">
                          <textarea class="form-control" placeholder="Write something"></textarea>
                        </div>
                        <!-- /.publisher-input -->
                        <!-- .publisher-actions -->
                        <div class="publisher-actions">
                          <!-- .publisher-tools -->
                          <div class="publisher-tools mr-auto">
                            <button type="button" class="btn btn-link fileinput-button">
                              <i class="fa fa-paperclip"></i>
                              <input type="file" id="message-attachment" name="attachment[]" multiple>
                            </button>
                            <button type="button" class="btn btn-link">
                              <i class="far fa-smile"></i>
                            </button>
                          </div>
                          <!-- /.publisher-tools -->
                          <button type="submit" class="btn btn-primary">Publish</button>
                        </div>
                        <!-- /.publisher-actions -->
                      </div>
                      <!-- /.publisher -->
                    </div>
                    <!-- /.card-body -->
                  </section>
                  <!-- /.card -->
                  <!-- .card -->
                  <section class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                      <!-- .media -->
                      <div class="media">
                        <figure class="user-avatar user-avatar-md mr-2">
                          <img src="assets/images/avatars/profile.jpg" alt="User Avatar"> </figure>
                        <!-- .media-body -->
                        <div class="media-body">
                          <!-- .publisher -->
                          <div class="publisher publisher-alt">
                            <!-- .publisher-input -->
                            <div class="publisher-input">
                              <textarea class="form-control" placeholder="Write a comment"></textarea>
                            </div>
                            <!-- /.publisher-input -->
                            <!-- .publisher-actions -->
                            <div class="publisher-actions">
                              <!-- .publisher-tools -->
                              <div class="publisher-tools mr-auto">
                                <button type="button" class="btn btn-link fileinput-button">
                                  <i class="fa fa-paperclip"></i>
                                  <input type="file" id="message-attachment" name="attachment[]" multiple>
                                </button>
                                <button type="button" class="btn btn-link">
                                  <i class="far fa-smile"></i>
                                </button>
                              </div>
                              <!-- /.publisher-tools -->
                              <button type="submit" class="btn btn-primary">Publish</button>
                            </div>
                            <!-- /.publisher-actions -->
                          </div>
                          <!-- /.publisher -->
                        </div>
                        <!-- /.media-body -->
                      </div>
                      <!-- /.media -->
                    </div>
                    <!-- /.card-body -->
                  </section>
                  <!-- /.card -->
                  <!-- .card -->
                  <section class="card">
                    <!-- .card-body -->
                    <div class="card-body">
                      <!-- .media -->
                      <div class="media">
                        <figure class="user-avatar user-avatar-md mr-2">
                          <img src="assets/images/avatars/uifaces9.jpg" alt="User Avatar"> </figure>
                        <!-- .media-body -->
                        <div class="media-body">
                          <!-- .publisher -->
                          <div class="publisher keep-focus focus">
                            <label for="publisherInput5" class="publisher-label">State: Always open</label>
                            <!-- .publisher-input -->
                            <div class="publisher-input">
                              <textarea id="publisherInput5" class="form-control" placeholder="Write a comment"></textarea>
                            </div>
                            <!-- /.publisher-input -->
                            <!-- .publisher-actions -->
                            <div class="publisher-actions">
                              <!-- .publisher-tools -->
                              <div class="publisher-tools mr-auto">
                                <button type="button" class="btn btn-link fileinput-button">
                                  <i class="fa fa-paperclip"></i>
                                  <input type="file" id="message-attachment" name="attachment[]" multiple>
                                </button>
                                <button type="button" class="btn btn-link">
                                  <i class="far fa-smile"></i>
                                </button>
                              </div>
                              <!-- /.publisher-tools -->
                              <button type="submit" class="btn btn-primary">Publish</button>
                            </div>
                            <!-- /.publisher-actions -->
                          </div>
                          <!-- /.publisher -->
                        </div>
                        <!-- /.media-body -->
                      </div>
                      <!-- /.media -->
                    </div>
                    <!-- /.card-body -->
                  </section>
                  <!-- /.card -->
                </div>
                <!-- /.section-block -->
                <hr class="my-5">
                <!-- .card -->
                <section id="input-group" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Prepended inputs</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi1">Prepended icon</label>
                          <!-- .input-group -->
                          <div class="input-group">
                            <label class="input-group-prepend" for="pi1">
                              <span class="input-group-text">
                                <span class="far fa-building"></span>
                              </span>
                            </label>
                            <input type="text" class="form-control" id="pi1" placeholder="e.g developer-team"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi2">Prepended icon w/ clearable</label>
                          <!-- .input-group -->
                          <div class="input-group has-clearable">
                            <button type="button" class="close" aria-label="Close">
                              <span aria-hidden="true">
                                <i class="fa fa-times-circle"></i>
                              </span>
                            </button>
                            <label class="input-group-prepend" for="pi2">
                              <span class="input-group-text">
                                <span class="oi oi-magnifying-glass"></span>
                              </span>
                            </label>
                            <input type="text" class="form-control" id="pi2" placeholder="Type something..." value="Moonlight"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi3">Prepended text</label>
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <div class="input-group-prepend">
                              <span class="input-group-text">http://</span>
                            </div>
                            <input type="text" class="form-control" id="pi3" placeholder="uselooper.com"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi4">Prepended label</label>
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <label class="input-group-prepend" for="pi4">
                              <span class="input-group-text">Email address:</span>
                            </label>
                            <input type="email" class="form-control" id="pi4" placeholder="johndoe@looper.com"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi5">Prepended select</label>
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <div class="input-group-prepend">
                              <select class="custom-select">
                                <option value=""> Country </option>
                                <option value="1" selected> United States (+1) </option>
                              </select>
                            </div>
                            <input type="text" class="form-control" id="pi5" placeholder="(201) 555-0123"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi6">Prepended select & icon</label>
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <!-- .input-group-prepend -->
                            <div class="input-group-prepend">
                              <select class="custom-select">
                                <option value=""> Filter By </option>
                                <option value="1"> Tags </option>
                                <option value="2"> Vendor </option>
                                <option value="3"> Variants </option>
                                <option value="4"> Prices </option>
                                <option value="5"> Sales </option>
                              </select>
                            </div>
                            <!-- /.input-group-prepend -->
                            <!-- .input-group -->
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <span class="oi oi-magnifying-glass"></span>
                                </span>
                              </div>
                              <input type="text" class="form-control" id="pi6" placeholder="Search record"> </div>
                            <!-- /.input-group -->
                          </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi7">Prepended button</label>
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <div class="input-group-prepend">
                              <button class="btn btn-secondary" type="button">Look Up</button>
                            </div>
                            <input type="text" class="form-control" id="pi7"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi8">Prepended button & icon</label>
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <div class="input-group-prepend dropdown">
                              <button class="btn btn-secondary" type="button" data-toggle="dropdown">Filter by
                                <span class="caret"></span>
                              </button>
                              <div class="dropdown-arrow"></div>
                              <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Price</a>
                                <a href="#" class="dropdown-item">Trending</a>
                                <a href="#" class="dropdown-item">Orders</a>
                                <a href="#" class="dropdown-item">Likes</a>
                              </div>
                            </div>
                            <!-- .input-group -->
                            <div class="input-group">
                              <div class="input-group-prepend">
                                <span class="input-group-text">
                                  <span class="oi oi-magnifying-glass"></span>
                                </span>
                              </div>
                              <input type="text" class="form-control" id="pi8" placeholder="Search"> </div>
                            <!-- /.input-group -->
                          </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                  <!-- .card-body -->
                  <div class="card-body border-top">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi9">Prepended badge</label>
                          <!-- .input-group -->
                          <div class="input-group">
                            <label class="input-group-prepend" for="pi9">
                              <span class="badge">$</span>
                            </label>
                            <input type="text" class="form-control" id="pi9"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="pi10">Prepended multiple badge</label>
                          <!-- .input-group -->
                          <div class="input-group">
                            <label class="input-group-prepend" for="pi10">
                              <span class="badge">apple
                                <a href="#" data-dismiss="badge">×</a>
                              </span>
                              <span class="badge">banana
                                <a href="#">×</a>
                              </span>
                            </label>
                            <input type="text" class="form-control" id="pi10"> </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <!-- .card -->
                <section class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Appended inputs</legend>
                        <p class="text-muted"> Can do what prepended inputs does. </p>
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="ai1">Appended icon</label>
                          <!-- .input-group -->
                          <div class="input-group">
                            <input type="text" class="form-control" id="ai1" placeholder="e.g developer-team">
                            <label class="input-group-append" for="ai1">
                              <span class="input-group-text">
                                <span class="far fa-building"></span>
                              </span>
                            </label>
                          </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <label for="ai2">Appended text</label>
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <input type="text" class="form-control" id="ai2" placeholder="Subscription fee">
                            <div class="input-group-append">
                              <span class="input-group-text">$ / month</span>
                            </div>
                          </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <!-- .card -->
                <section id="input-group" class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <!-- .form -->
                    <form>
                      <!-- .fieldset -->
                      <fieldset>
                        <legend>Both inputs</legend>
                        <!-- .form-group -->
                        <div class="form-group">
                          <!-- .input-group -->
                          <div class="input-group">
                            <label class="input-group-prepend" for="bi1">
                              <span class="input-group-text">http://</span>
                            </label>
                            <input type="text" class="form-control" id="bi1" placeholder="e.g. uselooper">
                            <div class="input-group-append">
                              <span class="input-group-text">@domain.com</span>
                            </div>
                          </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <!-- .input-group -->
                          <div class="input-group input-group-alt">
                            <label class="input-group-prepend" for="bi2">
                              <span class="input-group-text">http://</span>
                            </label>
                            <input type="text" class="form-control" id="bi2" placeholder="e.g. uselooper">
                            <div class="input-group-append">
                              <span class="input-group-text">@domain.com</span>
                            </div>
                          </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                        <!-- .form-group -->
                        <div class="form-group">
                          <!-- .input-group -->
                          <div class="input-group">
                            <label class="input-group-prepend" for="bi3">
                              <span class="badge">$</span>
                            </label>
                            <input type="number" class="form-control" id="bi3" placeholder="Amount (to the nearest dollar)">
                            <label class="input-group-append">
                              <span class="badge">.00</span>
                            </label>
                          </div>
                          <!-- /.input-group -->
                        </div>
                        <!-- /.form-group -->
                      </fieldset>
                      <!-- /.fieldset -->
                    </form>
                    <!-- /.form -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <hr class="my-5">
                <!-- .section-block -->
                <div class="section-block">
                  <h3 id="validation-states" class="section-title"> Validations </h3>
                  <p class="text-muted"> Provide valuable, actionable feedback to your users with HTML5 form validation. Choose from the browser default validation feedback, or implement custom messages with our built-in classes and starter JavaScript. </p>
                </div>
                <!-- /.section-block -->
                <!-- .card -->
                <section class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <h4 class="card-title"> Billing address </h4>
                    <!-- form .needs-validation -->
                    <form class="needs-validation" novalidate="">
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <label for="firstName">First name</label>
                          <input type="text" class="form-control" id="firstName" required="">
                          <div class="invalid-feedback"> Valid first name is required. </div>
                        </div>
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <label for="lastName">Last name</label>
                          <input type="text" class="form-control" id="lastName" required="">
                          <div class="invalid-feedback"> Valid last name is required. </div>
                        </div>
                        <!-- /grid column -->
                      </div>
                      <!-- /.form-row -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" required="">
                        <div class="invalid-feedback"> Your username is required. </div>
                      </div>
                      <!-- /.form-group -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="email">Email
                          <span class="badge badge-secondary">
                            <em>Optional</em>
                          </span>
                        </label>
                        <input type="email" class="form-control" id="email" placeholder="you@example.com">
                        <div class="invalid-feedback"> Please enter a valid email address for shipping updates. </div>
                      </div>
                      <!-- /.form-group -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                        <div class="invalid-feedback"> Please enter your shipping address. </div>
                      </div>
                      <!-- /.form-group -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <label for="address2">Address 2
                          <span class="badge badge-secondary">
                            <em>Optional</em>
                          </span>
                        </label>
                        <input type="text" class="form-control" id="address2" placeholder="Apartment or suite"> </div>
                      <!-- /.form-group -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-5 mb-3">
                          <label for="country">Country</label>
                          <select class="custom-select d-block w-100" id="country" required="">
                            <option value=""> Choose... </option>
                            <option> United States </option>
                          </select>
                          <div class="invalid-feedback"> Please select a valid country. </div>
                        </div>
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-4 mb-3">
                          <label for="state">State</label>
                          <select class="custom-select d-block w-100" id="state" required="">
                            <option value=""> Choose... </option>
                            <option> California </option>
                          </select>
                          <div class="invalid-feedback"> Please provide a valid state. </div>
                        </div>
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label for="zip">Zip</label>
                          <input type="text" class="form-control" id="zip" required="">
                          <div class="invalid-feedback"> Zip code required. </div>
                        </div>
                        <!-- /grid column -->
                      </div>
                      <!-- /.form-row -->
                      <hr class="mb-4">
                      <!-- .form-group -->
                      <div class="form-group">
                        <!-- .custom-control -->
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="same-address">
                          <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>
                        <!-- /.custom-control -->
                        <!-- .custom-control -->
                        <div class="custom-control custom-checkbox">
                          <input type="checkbox" class="custom-control-input" id="save-info">
                          <label class="custom-control-label" for="save-info">Save this information for next time</label>
                        </div>
                        <!-- /.custom-control -->
                      </div>
                      <!-- /.form-group -->
                      <hr class="mb-4">
                      <h4 class="card-title"> Payment </h4>
                      <!-- .form-group -->
                      <div class="form-group">
                        <div class="custom-control custom-radio">
                          <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required="">
                          <label class="custom-control-label" for="credit">Credit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                          <label class="custom-control-label" for="debit">Debit card</label>
                        </div>
                        <div class="custom-control custom-radio">
                          <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                          <label class="custom-control-label" for="paypal">PayPal</label>
                        </div>
                      </div>
                      <!-- /.form-group -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-6 mb-3">
                          <label for="cc-name">Name on card</label>
                          <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                          <small class="text-muted">Full name as displayed on card</small>
                          <div class="invalid-feedback"> Name on card is required </div>
                        </div>
                        <!-- /grid column -->
                        <!-- /grid column -->
                        <div class="col-md-6 mb-3">
                          <label for="cc-number">Credit card number</label>
                          <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                          <div class="invalid-feedback"> Credit card number is required </div>
                        </div>
                        <!-- /grid column -->
                      </div>
                      <!-- /.form-row -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label for="cc-expiration">Expiration</label>
                          <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                          <div class="invalid-feedback"> Expiration date required </div>
                        </div>
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label for="cc-cvv">CVV</label>
                          <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                          <div class="invalid-feedback"> Security code required </div>
                        </div>
                        <!-- /grid column -->
                      </div>
                      <!-- /.form-row -->
                      <hr class="mb-4">
                      <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
                    </form>
                    <!-- /form .needs-validation -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
                <!-- .card -->
                <section class="card">
                  <!-- .card-body -->
                  <div class="card-body">
                    <h3 class="card-title"> Feedback tooltip </h3>
                    <!-- form .needs-validation -->
                    <form class="needs-validation" novalidate="">
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- form grid -->
                        <div class="col-md-6 mb-3">
                          <label for="validationTooltip01">First name
                            <abbr title="Required">*</abbr>
                          </label>
                          <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required="">
                          <div class="valid-tooltip"> Looks good! </div>
                        </div>
                        <!-- /form grid -->
                        <!-- form grid -->
                        <div class="col-md-6 mb-3">
                          <label for="validationTooltip02">Last name
                            <abbr title="Required">*</abbr>
                          </label>
                          <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required="">
                          <div class="valid-tooltip"> Looks good! </div>
                        </div>
                        <!-- /form grid -->
                        <!-- form grid -->
                        <div class="col-md-12 mb-3">
                          <label for="validationTooltipUsername">Username
                            <abbr title="Required">*</abbr>
                          </label>
                          <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="inputGroupPrepend" required="">
                          <div class="invalid-tooltip"> Please choose a username. </div>
                        </div>
                        <!-- /form grid -->
                      </div>
                      <!-- /.form-row -->
                      <!-- .form-row -->
                      <div class="form-row">
                        <!-- grid column -->
                        <div class="col-md-5 mb-3">
                          <label for="validationTooltipCountry">Country
                            <abbr title="Required">*</abbr>
                          </label>
                          <select class="custom-select d-block w-100" id="validationTooltipCountry" required="">
                            <option value=""> Choose... </option>
                            <option> United States </option>
                          </select>
                          <div class="invalid-feedback"> Please select a valid country. </div>
                        </div>
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-4 mb-3">
                          <label for="validationTooltipState">State
                            <abbr title="Required">*</abbr>
                          </label>
                          <select class="custom-select d-block w-100" id="validationTooltipState" required="">
                            <option value=""> Choose... </option>
                            <option> California </option>
                          </select>
                          <div class="invalid-feedback"> Please provide a valid state. </div>
                        </div>
                        <!-- /grid column -->
                        <!-- grid column -->
                        <div class="col-md-3 mb-3">
                          <label for="validationTooltipZip">Zip
                            <abbr title="Required">*</abbr>
                          </label>
                          <input type="text" class="form-control" id="validationTooltipZip" required="">
                          <div class="invalid-feedback"> Zip code required. </div>
                        </div>
                        <!-- /grid column -->
                      </div>
                      <!-- /.form-row -->
                      <!-- .form-group -->
                      <div class="form-group">
                        <div class="custom-control custom-checkbox mb-3">
                          <input type="checkbox" class="custom-control-input" id="validationTooltip06" required="">
                          <label class="custom-control-label" for="validationTooltip06">Agree to terms and conditions</label>
                          <div class="invalid-tooltip"> You must agree before submitting. </div>
                        </div>
                      </div>
                      <!-- /.form-group -->
                      <!-- .form-actions -->
                      <div class="form-actions">
                        <button class="btn btn-primary" type="submit">Submit form</button>
                      </div>
                      <!-- /.form-actions -->
                    </form>
                    <!-- /form .needs-validation -->
                  </div>
                  <!-- /.card-body -->
                </section>
                <!-- /.card -->
              </div>
              <!-- /.page-section -->
            </div>
            <!-- /.page-inner -->
@endsection