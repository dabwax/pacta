<script type="text/javascript">
    $(document).ready(function() {

        var n = noty({
            text: '<?= h($message) ?>',
            type: 'error',
            animation: {
                open: 'animated flipInX', // Animate.css class names
                close: 'animated flipOutX' // Animate.css class names
            }
        });

    });
</script>