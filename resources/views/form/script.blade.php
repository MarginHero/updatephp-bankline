<script>
    $(document).ready(function() {
        $(".state_reason").hide();
        $('.state_view').show();
        $("#reasonLbl").html('<strong>Reject Reason&ast;</strong>')
        $("#reason_text").hide();
        $("#reason_view").hide();
        $("#reject").on('click', function() {
            $("#reject").prop('disabled', true);
            $(".state_reason").show();
            $('.state_view').hide();
            $("#reason_text").show();
            $("#reason_view").hide();
        });
    });
</script>