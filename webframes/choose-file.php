<script type="text/javascript">
$('#chooseFile').click(function(event) {
    event.preventDefault();
    // prevents our button from submitting or doing anything else
    $('#fileInput').trigger('click');
    // passes on the click event to our hidden choose file input (or rather,
    // it triggers a new click event, whatevs)
});

$("#fileInput").on("change", function() {
    var file = this.files[0],
        fileName = file.name,
        fileSize = file.size;
    // determining the filename of the newly selected file
    $('#fileName').text("Uploading: " + fileName + " (" + fileSize + " bytes)").show();
    // setting the text of the fileName element, and showing it
});
</script>
