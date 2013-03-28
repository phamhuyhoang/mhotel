<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" />
<script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js"></script>
<form id="frmHotel" class="span5" method="post" action="">
    <p></p>
    <div class="input-control text">
        <input name="hotel_name" type="text" placeholder="Tên khách sạn" />
    </div>
</form>

<script type="text/javascript">
    $(document).ready(function() {
         $(function() {
            $( "#frmHotel" ).dialog();
            });
    });
</script>