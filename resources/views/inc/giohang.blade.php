<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
@extends('pages.layoutadmin')
@section('admin_content')

<!--main content start-->


		<div class="table-agile-info">
        <div class="panel panel-default">
        <div class="panel-heading">
     Basic table
        </div>
        <div>
      <table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
          <tr>
            <th data-breakpoints="xs">STT</th>
            <th>Tên hàng</th>
            <th>Số lượng</th>
            <th data-breakpoints="xs">Đơn giá</th>
            <th data-breakpoints="xs">Thành tiền</th>
            <th data-breakpoints="xs sm md" data-title="DOB">Hành động</th>

          </tr>
        </thead>
        <tbody>
          <tr data-expanded="true">
            <td>1</td>
            <td>Dennise</td>
            <td>Fuhrman</td>
            <td>High School History Teacher</td>
            <td>July 25th 1960</td>
            <td><button>Thanh toán</button></td>
          </tr>

        </tbody>
      </table>
    </div>

@endsection

{{-- <!--main content end-->
</section>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.dcjqaccordion.2.7.js"></script>
<script src="js/scripts.js"></script>
<script src="js/jquery.slimscroll.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html> --}}
