<script>
        $(document).ready(function() {
        getContent();
    });
    function getContent(params) {
            $.ajax({
            url: './includes/get-content.php',
            method: 'POST',
            data: {},
            dataType: 'json',
            success: function(data) {
                $('#textfield').html(data['html'])
            }
        })
        }

    function trash(id) {
        $.ajax({
            url: './includes/delete-qr.php',
            method: 'POST',
            data: {id},
            dataType: 'json',
            success: function(data) {
                getContent();
            }
        })
    }

    function duplicate(title, era, image, content, qr_code) {
        $.ajax({
            url: './includes/duplicate.php',
            method: 'POST',
            data: {title,
                content,
                era,
                image,
                qr_code
            },
            dataType: 'json',
            success: function(data) {
                
                getContent();
            }
        })
    }

    function edit(title, era, image, content, qr_code) {
        $.ajax({
            url: './includes/edit-museumstuk.php',
            method: 'POST',
            data: {title,
                content,
                era,
                image,
                qr_code
            },
            dataType: 'json',
            success: function(data) {
                
                getContent();
            }
        })
    }
</script>