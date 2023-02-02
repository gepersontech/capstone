<div class="page-header">
    <div class="row">
        <div class="col-md-6 col-sm-12">
            <div class="title">
                <h4>Ranking</h4>
            </div>
            <nav aria-label="breadcrumb" role="navigation">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        Ranking
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>

<!-- Simple Datatable start -->
<div class="card-box mb-30">
    <div class="pd-20">
        <h4 class="text-blue h4">Student Ranking</h4>

    </div>
    <div class="pb-20">
        <table class="data-table table stripe hover nowrap">
            <thead>
                <tr>
                    <th class="table-plus datatable-nosort">Student Name</th>
                    <th class="table-plus datatable-nosort">Exam/Quiz Title</th>
                    <th class="datatable-nosort">Attempts</th>
                    <th class="datatable-nosort">Hints used</th>
                    <th class="datatable-nosort">Score</th>
                    <th class="datatable-nosort">Remarks</th>
                    <!-- <th class="datatable-nosort">Rank</th> -->
                </tr>
            </thead>
            <tbody>

                <?php
                $result = mysqli_query($con, "SELECT users.firstname,users.lastname, exam.exam_title,exam_results.exam_attempt,exam_results.total_hintUsed, exam_results.Student_Score,exam_results.is_passed FROM exam_results JOIN users ON exam_results.student_id = users.user_id JOIN exam ON exam_results.exam_id = exam.exam_id WHERE exam_results.exam_attempt = 1 and users.role_id = 3 ORDER BY exam_results.Student_Score DESC;");
                $count = 1;
                $rowCount = mysqli_num_rows($result);
                if ($rowCount > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td><?php echo $row['firstname'] . "  " . $row['lastname'] ?></td>
                            <td><?php echo $row['exam_title']; ?></td>
                            <td><?php echo $row['exam_attempt']; ?></td>
                            <td><?php echo $row['total_hintUsed']; ?></td>
                            <td><?php echo $row['Student_Score']; ?></td>
                            <td>
                                <?php
                                if ($row['Student_Score'] > 105 && $row['Student_Score'] <= 110) {
                                ?>
                                    <div class="card text-center" style="padding: 2px;background-color: #00FF00;border: none; border-radius: 25px;width: 100px;color: white;">
                                        <span>Outstanding</span>
                                    </div>
                                <?php
                                } else if ($row['Student_Score'] > 100 && $row['Student_Score'] <= 105) {
                                ?>
                                    <div class="card text-center" style="padding: 2px;background-color: #00BFFF;border: none; border-radius: 25px;width: 78px;color: white;">
                                        <span>Excellent</span>
                                    </div>
                                <?php
                                } else if ($row['Student_Score'] > 95 && $row['Student_Score'] <= 100) {
                                ?>
                                    <div class="card text-center" style="padding: 2px;background-color: #FFD700;border: none; border-radius: 25px;width: 78px;color: white;">
                                        <span>Very good</span>
                                    </div>
                                <?php
                                } else if ($row['Student_Score'] > 90 && $row['Student_Score'] <= 95) {
                                ?>
                                    <div class="card text-center" style="padding: 2px;background-color: #FFA500;border: none; border-radius: 25px;width: 60px;color: white;">
                                        <span>Good</span>
                                    </div>
                                <?php
                                } else if ($row['Student_Score'] > 85 && $row['Student_Score'] <= 90) {
                                ?>
                                    <div class="card text-center" style="padding: 2px;background-color: #9400D3;border: none; border-radius: 25px;width: 70px;color: white;">
                                        <span>Average</span>
                                    </div>
                                <?php
                                } else if ($row['Student_Score'] >= 80 && $row['Student_Score'] <= 85) {
                                ?>
                                    <div class="card text-center" style="padding: 2px;background-color: #A52A2A;border: none; border-radius: 25px;width: 60px;color: white;">
                                        <span>Poor</span>
                                    </div>
                                <?php
                                } else if ($row['Student_Score'] < 80) {
                                ?>
                                    <div class="card text-center" style="padding: 2px;background-color: #DC143C;border: none; border-radius: 25px;width: 60px;color: white;">
                                        <span>Failed</span>
                                    </div>
                                <?php
                                }
                                ?>
                            </td>

                        </tr>
                <?php
                        $count++;
                    }
                } else {
                }
                ?>

            </tbody>

        </table>
    </div>
</div>
<!-- Simple Datatable End -->

<script>
    function delete_module(data_id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this Data!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!',
            closeOnConfirm: false,
            closeOnCancel: false
        }).then((result) => {

            if (result.isConfirmed) {
                window.location = ("action/admin/delete-module.php?id=" + data_id);
            }
        })
    }
</script>