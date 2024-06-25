<?php
global $advertId;
require_once "app/init.php";
?>

<form action="<?php echo BASE_URL ?>delete_advertisement.php" method="post" enctype="multipart/form-data">
    <div class="input-container hidden">
        <label for="id">Id:</label>
        <input type="number" id="id" name="id" value="<?php echo $advertId ?>" hidden="hidden">
    </div>
    <div class="input-container checkbox">
        <input type="checkbox" id="agree" name="agree" value="agree">
        <label for="agree"> I acknowledge that this action is irreversible.</label>
    </div>
    <div class="input-container">
        <input id="submitBtn" type="submit" value="Delete Advertisement" disabled>
    </div>
</form>

<script>
    const inputs = document.querySelectorAll('input[type="checkbox"]');

    inputs.forEach(input => {
        input.addEventListener('input', () => {
            if (input.checked) {
                input.classList.add('filled');
            } else {
                input.classList.remove('filled');
            }
            checkInputs();
        });
    });

    function checkInputs() {
        const filledInputs = document.querySelectorAll('.filled').length !== 0;
        document.getElementById('submitBtn').disabled = !filledInputs;
    }
</script>
