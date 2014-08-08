<script type="text/javascript">
$('#chooseFile').click(function(event) {
    event.preventDefault();
    // prevents our button from submitting or doing anything else
    $('#fileToUpload').trigger('click');
    // passes on the click event to our hidden choose file input (or rather,
    // it triggers a new click event, whatevs)
});

</script>
