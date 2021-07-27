<div id="modal-products" class="modal modal-alert fade" tabindex="-1" role="dialog"
    aria-labelledby="modal-productsLabel" aria-hidden="true">

    <!-- .modal-dialog -->
    <div class="modal-dialog modal-xl" role="document">
        <!-- .modal-content -->
        <div class="modal-content">
            <!-- .modal-header -->
            <div class="modal-header">
                <h5 id="moda-productsLabel" class="modal-title"> Danh sách sản phẩm
                    Chi Nhánh Q1 </h5>
            </div><!-- /.modal-header -->
            <!-- .modal-body -->
            <div class="modal-body">
                <!-- .card -->
                <div class="card card-fluid">

                    <!-- .card-body -->
                    <div class="card-body">
                        <form action="" method="GET" id="form-search-ajax">
                            <input type="hidden" name="sort" value="">
                            <input type="hidden" name="direction" value="desc">
                            <input type="hidden" name="task" value="import_products" hidden="hidden">
                            <input type="hidden" name="id" value="" hidden="hidden">
                            <input type="hidden" name="warehouse_id" value="1" hidden="hidden">
                            <input type="hidden" name="cr_controller" value="Orders" hidden="hidden">
                            <div class="input-group input-group-alt">
                                <div class="input-group-prepend">
                                    <button class="btn btn-secondary" type="button" data-toggle="modal"
                                        data-target="#modalFilterColumns">Tìm nâng cao</button>
                                </div>
                                <div class="input-group has-clearable">
                                    <button type="button" class="close trigger-submit trigger-submit-delay"
                                        aria-label="Close">
                                        <span aria-hidden="true"><i class="fa fa-times-circle"></i></span>
                                    </button>
                                    <div class="input-group-prepend trigger-submit">
                                        <span class="input-group-text"><span class="fas fa-search"></span></span>
                                    </div>
                                    <input type="text" class="form-control" autocomplete="off" name="query" value=""
                                        placeholder="Tìm nhanh ID, tên hoặc mã sản phẩm">
                                </div>
                            </div>
                            <div id="active-filters" class="mt-2"></div>
                            <!-- #modalFilterColumns -->
                            <div class="modal fade" id="modalFilterColumns" tabindex="-1" role="dialog"
                                aria-labelledby="modalFilterColumnsLabel" aria-hidden="true">
                                <!-- .modal-dialog -->
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <!-- .modal-content -->
                                    <div class="modal-content">
                                        <!-- .modal-header -->
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalFilterColumnsLabel"> Lọc nâng cao </h5>
                                        </div><!-- /.modal-header -->
                                        <!-- .modal-body -->
                                        <div class="modal-body">
                                            <!-- #filter-columns -->
                                            <div id="filter-columns">
                                                <!-- .form-row -->
                                                <div class="form-group form-row filter-row">
                                                    <div class="col-lg-4">
                                                        <label class="">ID sản phẩm</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input text"><input type="text" name="filter[id]"
                                                                class="form-control f-id" id="f-id" /></div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-row filter-row">
                                                    <div class="col-lg-4">
                                                        <label class="">Tên sản phẩm</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input text"><input type="text" name="filter[name]"
                                                                class="form-control f-name" id="f-name" /></div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-row filter-row">
                                                    <div class="col-lg-4">
                                                        <label class="">Mã sản phẩm</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input text"><input type="text" name="filter[sku]"
                                                                class="form-control f-sku" id="f-sku" /></div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-row filter-row">
                                                    <div class="col-lg-4">
                                                        <label class="">Thuộc tính sản phẩm</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input text"><input type="text" name="filter[params]"
                                                                class="form-control f-params" id="f-params" /></div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-row filter-row">
                                                    <div class="col-lg-4">
                                                        <label class="">Nhóm</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input select"><select name="filter[collection_id]"
                                                                class="form-control custom-select f-collection_id"
                                                                id="f-collection_id">
                                                                <option value="">Tất cả</option>
                                                                <option value="1">3M Gloss</option>
                                                                <option value="2">3M Gloss - AW</option>
                                                                <option value="3">3M Matte</option>
                                                                <option value="4">3M Matte - AW</option>
                                                                <option value="5">3M Satin</option>
                                                                <option value="6">3M Satin - AW</option>
                                                                <option value="7">3M Texture</option>
                                                                <option value="8">3M Texture - AW</option>
                                                                <option value="9">Phụ kiện - Cáp</option>
                                                                <option value="10">Phụ kiện - Cường lực</option>
                                                                <option value="11">Phụ kiện - Ốp lưng</option>
                                                                <option value="12">Phụ kiện - Pin</option>
                                                                <option value="13">Phụ kiện - Sạc</option>
                                                                <option value="14">Phụ kiện - Túi</option>
                                                                <option value="15">Phụ kiện khác</option>
                                                                <option value="16">PPF Bóng</option>
                                                                <option value="17">PPF Đen</option>
                                                                <option value="18">PPF Mờ</option>
                                                                <option value="19">Skins</option>
                                                                <option value="20">Văn Phòng Phẩm </option>
                                                                <option value="22">3M THÔ</option>
                                                                <option value="23"></option>
                                                                <option value="24"></option>
                                                                <option value="25"></option>
                                                                <option value="26"></option>
                                                                <option value="27"></option>
                                                                <option value="28"></option>
                                                                <option value="29"></option>
                                                                <option value="30"></option>
                                                                <option value="31"></option>
                                                                <option value="32"></option>
                                                                <option value="33"></option>
                                                                <option value="34"></option>
                                                                <option value="35"></option>
                                                                <option value="36"></option>
                                                                <option value="37"></option>
                                                                <option value="38"></option>
                                                                <option value="39"></option>
                                                                <option value="40"></option>
                                                                <option value="41"></option>
                                                                <option value="42"></option>
                                                                <option value="43"></option>
                                                                <option value="44"></option>
                                                                <option value="45"></option>
                                                                <option value="46"></option>
                                                                <option value="47"></option>
                                                                <option value="48"></option>
                                                                <option value="49"></option>
                                                                <option value="50"></option>
                                                                <option value="51"></option>
                                                                <option value="52"></option>
                                                                <option value="53"></option>
                                                                <option value="54"></option>
                                                                <option value="55"></option>
                                                                <option value="56"></option>
                                                                <option value="57"></option>
                                                                <option value="58"></option>
                                                                <option value="59"></option>
                                                                <option value="60"></option>
                                                                <option value="61"></option>
                                                                <option value="62"></option>
                                                                <option value="63"></option>
                                                                <option value="64"></option>
                                                                <option value="65"></option>
                                                                <option value="66"></option>
                                                                <option value="67"></option>
                                                                <option value="68"></option>
                                                                <option value="69"></option>
                                                                <option value="70"></option>
                                                                <option value="71"></option>
                                                                <option value="72"></option>
                                                                <option value="73"></option>
                                                                <option value="74"></option>
                                                                <option value="75"></option>
                                                                <option value="76"></option>
                                                                <option value="77"></option>
                                                                <option value="78"></option>
                                                                <option value="79"></option>
                                                                <option value="80"></option>
                                                                <option value="81"></option>
                                                                <option value="82"></option>
                                                                <option value="83"></option>
                                                                <option value="84"></option>
                                                                <option value="85"></option>
                                                                <option value="86"></option>
                                                                <option value="87"></option>
                                                                <option value="88"></option>
                                                                <option value="89"></option>
                                                                <option value="90"></option>
                                                                <option value="91"></option>
                                                                <option value="92"></option>
                                                                <option value="93"></option>
                                                                <option value="94"></option>
                                                                <option value="95"></option>
                                                                <option value="96"></option>
                                                                <option value="97"></option>
                                                                <option value="98"></option>
                                                                <option value="99"></option>
                                                                <option value="100"></option>
                                                                <option value="101"></option>
                                                                <option value="102"></option>
                                                                <option value="103"></option>
                                                                <option value="104"></option>
                                                                <option value="105"></option>
                                                                <option value="106"></option>
                                                                <option value="107"></option>
                                                                <option value="108"></option>
                                                                <option value="109"></option>
                                                                <option value="110"></option>
                                                                <option value="111"></option>
                                                                <option value="112"></option>
                                                                <option value="113"></option>
                                                                <option value="114"></option>
                                                                <option value="115"></option>
                                                                <option value="116"></option>
                                                                <option value="117"></option>
                                                                <option value="118"></option>
                                                                <option value="119"></option>
                                                                <option value="120"></option>
                                                                <option value="121"></option>
                                                                <option value="122"></option>
                                                                <option value="123"></option>
                                                                <option value="124"></option>
                                                                <option value="125"></option>
                                                                <option value="126"></option>
                                                                <option value="127"></option>
                                                                <option value="128"></option>
                                                                <option value="129"></option>
                                                                <option value="130"></option>
                                                                <option value="131"></option>
                                                                <option value="132"></option>
                                                                <option value="133"></option>
                                                                <option value="134"></option>
                                                                <option value="135"></option>
                                                                <option value="136"></option>
                                                                <option value="137"></option>
                                                                <option value="138"></option>
                                                                <option value="139"></option>
                                                                <option value="140"></option>
                                                                <option value="141"></option>
                                                                <option value="142"></option>
                                                                <option value="143"></option>
                                                                <option value="144"></option>
                                                                <option value="145"></option>
                                                                <option value="146"></option>
                                                                <option value="147"></option>
                                                                <option value="148"></option>
                                                                <option value="149"></option>
                                                                <option value="150"></option>
                                                                <option value="151"></option>
                                                                <option value="152"></option>
                                                                <option value="153"></option>
                                                                <option value="154"></option>
                                                                <option value="155"></option>
                                                                <option value="156"></option>
                                                                <option value="157"></option>
                                                                <option value="158"></option>
                                                                <option value="159"></option>
                                                                <option value="160"></option>
                                                                <option value="161"></option>
                                                                <option value="162"></option>
                                                                <option value="163"></option>
                                                                <option value="164"></option>
                                                                <option value="165"></option>
                                                                <option value="166"></option>
                                                                <option value="167"></option>
                                                                <option value="168"></option>
                                                                <option value="169"></option>
                                                                <option value="170"></option>
                                                                <option value="171"></option>
                                                                <option value="172"></option>
                                                                <option value="173"></option>
                                                                <option value="174"></option>
                                                                <option value="175"></option>
                                                                <option value="176"></option>
                                                                <option value="177"></option>
                                                                <option value="178"></option>
                                                                <option value="179"></option>
                                                                <option value="180"></option>
                                                                <option value="181"></option>
                                                                <option value="182"></option>
                                                                <option value="183"></option>
                                                                <option value="184"></option>
                                                                <option value="185"></option>
                                                                <option value="186"></option>
                                                                <option value="187"></option>
                                                                <option value="188"></option>
                                                                <option value="189"></option>
                                                                <option value="190"></option>
                                                                <option value="191"></option>
                                                                <option value="192"></option>
                                                                <option value="193"></option>
                                                                <option value="194"></option>
                                                                <option value="195"></option>
                                                                <option value="196"></option>
                                                                <option value="197"></option>
                                                                <option value="198"></option>
                                                                <option value="199"></option>
                                                                <option value="200"></option>
                                                                <option value="201"></option>
                                                                <option value="202"></option>
                                                                <option value="203"></option>
                                                                <option value="204"></option>
                                                                <option value="205"></option>
                                                                <option value="206"></option>
                                                                <option value="207"></option>
                                                                <option value="208"></option>
                                                                <option value="209"></option>
                                                                <option value="210"></option>
                                                                <option value="211"></option>
                                                                <option value="212"></option>
                                                                <option value="213"></option>
                                                                <option value="214"></option>
                                                                <option value="215"></option>
                                                                <option value="216"></option>
                                                                <option value="217"></option>
                                                                <option value="218"></option>
                                                                <option value="219"></option>
                                                                <option value="220"></option>
                                                                <option value="221"></option>
                                                                <option value="222"></option>
                                                                <option value="223"></option>
                                                                <option value="224"></option>
                                                                <option value="225"></option>
                                                                <option value="226"></option>
                                                                <option value="227"></option>
                                                                <option value="228"></option>
                                                                <option value="229"></option>
                                                                <option value="230"></option>
                                                                <option value="231"></option>
                                                                <option value="232"></option>
                                                                <option value="233"></option>
                                                                <option value="234"></option>
                                                                <option value="235"></option>
                                                                <option value="236"></option>
                                                                <option value="237"></option>
                                                                <option value="238"></option>
                                                                <option value="239"></option>
                                                                <option value="240"></option>
                                                                <option value="241"></option>
                                                                <option value="242"></option>
                                                                <option value="243"></option>
                                                                <option value="244"></option>
                                                                <option value="245"></option>
                                                                <option value="246"></option>
                                                                <option value="247"></option>
                                                                <option value="248"></option>
                                                                <option value="249"></option>
                                                                <option value="250"></option>
                                                                <option value="251"></option>
                                                                <option value="252"></option>
                                                                <option value="253"></option>
                                                                <option value="254"></option>
                                                                <option value="255"></option>
                                                                <option value="256"></option>
                                                                <option value="257"></option>
                                                                <option value="258"></option>
                                                                <option value="259"></option>
                                                                <option value="260"></option>
                                                                <option value="261"></option>
                                                                <option value="262"></option>
                                                                <option value="263"></option>
                                                                <option value="264"></option>
                                                                <option value="265"></option>
                                                                <option value="266"></option>
                                                                <option value="267"></option>
                                                                <option value="268"></option>
                                                                <option value="269"></option>
                                                                <option value="270"></option>
                                                                <option value="271"></option>
                                                                <option value="272"></option>
                                                                <option value="273"></option>
                                                                <option value="274"></option>
                                                                <option value="275"></option>
                                                                <option value="276"></option>
                                                                <option value="277"></option>
                                                                <option value="278"></option>
                                                                <option value="279"></option>
                                                                <option value="280"></option>
                                                                <option value="281"></option>
                                                                <option value="282"></option>
                                                                <option value="283"></option>
                                                                <option value="284"></option>
                                                                <option value="285"></option>
                                                                <option value="286"></option>
                                                                <option value="287"></option>
                                                                <option value="288"></option>
                                                                <option value="289"></option>
                                                                <option value="290"></option>
                                                                <option value="291"></option>
                                                                <option value="292"></option>
                                                                <option value="293"></option>
                                                                <option value="294"></option>
                                                                <option value="295"></option>
                                                                <option value="296"></option>
                                                                <option value="297"></option>
                                                                <option value="298"></option>
                                                                <option value="299"></option>
                                                                <option value="300"></option>
                                                                <option value="301"></option>
                                                                <option value="302"></option>
                                                                <option value="303"></option>
                                                                <option value="304"></option>
                                                                <option value="305"></option>
                                                                <option value="306"></option>
                                                                <option value="307"></option>
                                                                <option value="308"></option>
                                                                <option value="309"></option>
                                                                <option value="310"></option>
                                                                <option value="311"></option>
                                                                <option value="312"></option>
                                                                <option value="313"></option>
                                                                <option value="314"></option>
                                                                <option value="315"></option>
                                                                <option value="316"></option>
                                                                <option value="317"></option>
                                                                <option value="318"></option>
                                                                <option value="319"></option>
                                                                <option value="320"></option>
                                                                <option value="321"></option>
                                                                <option value="322"></option>
                                                                <option value="323"></option>
                                                                <option value="324"></option>
                                                                <option value="325"></option>
                                                                <option value="326"></option>
                                                                <option value="327"></option>
                                                                <option value="328"></option>
                                                                <option value="329"></option>
                                                                <option value="330"></option>
                                                                <option value="331"></option>
                                                                <option value="332"></option>
                                                                <option value="333"></option>
                                                                <option value="334"></option>
                                                                <option value="335"></option>
                                                                <option value="336"></option>
                                                                <option value="337"></option>
                                                                <option value="338"></option>
                                                                <option value="339"></option>
                                                                <option value="340"></option>
                                                                <option value="341"></option>
                                                                <option value="342"></option>
                                                                <option value="343"></option>
                                                                <option value="344"></option>
                                                                <option value="345"></option>
                                                                <option value="346"></option>
                                                                <option value="347"></option>
                                                                <option value="348"></option>
                                                                <option value="349"></option>
                                                                <option value="350"></option>
                                                                <option value="351"></option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                                <div class="form-group form-row filter-row">
                                                    <div class="col-lg-4">
                                                        <label class="">Nhà cung cấp</label>
                                                    </div>
                                                    <div class="col-lg-8">
                                                        <div class="input select"><select name="filter[supplier_id]"
                                                                class="form-control custom-select f-supplier_id"
                                                                id="f-supplier_id">
                                                                <option value="">Tất cả</option>
                                                                <option value="1">Hằng Đặng</option>
                                                                <option value="2">ONE2VN</option>
                                                                <option value="3">SENCO</option>
                                                                <option value="4">CHẤN LONG </option>
                                                                <option value="5">Tân Phú </option>
                                                                <option value="6">TRISKINS</option>
                                                            </select></div>
                                                    </div>
                                                </div>
                                            </div><!-- #filter-columns -->
                                            <!-- .btn -->
                                        </div><!-- /.modal-body -->
                                        <!-- .modal-footer -->
                                        <div class="modal-footer justify-content-start">
                                            <button type="submit" class="btn btn-primary" id="apply-filter">Áp
                                                dụng</button>
                                            <button type="button" data-dismiss="modal" class="btn btn-light"
                                                id="clear-filter">Hủy</button>
                                        </div><!-- /.modal-footer -->
                                    </div><!-- /.modal-content -->
                                </div><!-- /.modal-dialog -->
                            </div><!-- /#modalFilterColumns -->
                        </form>
                        <!-- .table -->
                        <table id="ajaxProductsTable" class="table">
                            <!-- thead -->
                            <thead>
                                <tr>
                                    <th colspan="2" style="min-width: 220px;">
                                        <div class="thead-dd dropdown">
                                            <span class="custom-control custom-control-nolabel custom-checkbox"><input
                                                    type="checkbox" class="custom-control-input" id="check-handle">
                                                <label class="custom-control-label" for="check-handle"></label></span>
                                            <div class="thead-btn" role="button" data-toggle="dropdown"
                                                aria-haspopup="true" aria-expanded="false">
                                                <span class="fa fa-caret-down"></span>
                                            </div>

                                        </div>
                                    </th>
                                    <th> Mã</th>
                                    <th> Nhóm </th>
                                    <th> Giá bán </th>
                                    <th> Tồn kho </th>
                                    <th> Bảo hành </th>
                                </tr>
                            </thead><!-- /thead -->
                            <!-- tbody -->
                            <tbody>
                                <!-- create empty row to passing html validator -->
                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </tbody><!-- /tbody -->
                        </table><!-- /.table -->
                    </div><!-- /.card-body -->
                </div><!-- /.card -->
            </div><!-- /.modal-body -->
            <!-- .modal-footer -->
            <div class="modal-footer pt-1">
                <button type="button" id="insert-products" class="btn btn-primary">Chọn</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Đóng</button>
            </div><!-- /.modal-footer -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->