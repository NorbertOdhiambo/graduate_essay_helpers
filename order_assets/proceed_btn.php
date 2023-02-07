<?php
if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
?>

    <div class="ops-form-group proceedbtn">
        <button type="submit" name="proceed" id="proceed" class="btn-outline btn-xl js-scroll-trigger">Proceed to Payment</button>
    </div>

<?php
}
?>