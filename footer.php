<footer class="site-footer">
    <p>© <?php echo date('Y'); ?> LearnConnect. All rights reserved.</p>
</footer>

</div> <!-- end site-wrapper -->

<?php wp_footer(); ?>
</body>
</html>

<script>
document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".learnconnect-like-btn").forEach(button => {
        button.addEventListener("click", function () {
            const postId = this.dataset.post;

            fetch("<?php echo admin_url('admin-ajax.php'); ?>", {
                method: "POST",
                headers: { "Content-Type": "application/x-www-form-urlencoded" },
                body: "action=learnconnect_like&post_id=" + postId
            })
            .then(res => res.text())
            .then(data => {
                this.nextElementSibling.innerText = data + " Likes";
            });
        });
    });
});
</script>

</body>
</html>
