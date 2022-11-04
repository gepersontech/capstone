<div class="footer-wrap pd-20 mb-20 card-box">
    Copyright 2022
    <a href="index.php" style="text-decoration: none;">GITS</a> | All Right Reserved.
</div>

<!-- Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Logout</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h5>Are you sure you want to logout?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                <form action="action/allcode.php" method="post">
                    <button type="submit" name="logout" class="btn btn-danger">Proceed</button>
                </form>
            </div>
        </div>
    </div>
</div>