<section class="row bieu-do">
    <div class="col-md-8 bieu-do_">
        <section class="body-bieu-do">
            <h6>Lượng truy cập trong năm 2021</h6>
            <canvas id="myChart" style="width: 100%;height: 300px;"></canvas>
            <script>
            //khởi tạo đối tương
            var xhttp = new XMLHttpRequest();
            //link đến api
            var url_api = "<?php echo $level.API;?>ad_bieu_do.php";
            xhttp.open("POST",url_api,true);
            //gửi dử liệu
            xhttp.send();
            //kết quả trả về
            xhttp.onreadystatechange = function(){
                var data_view = JSON.parse(this.responseText);
                var data = [];
                for(var i = 0; i <12; i++){
                    data.push(data_view[0][i]);
                }
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: ['Tháng 1','Tháng 2','Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'
                    ],
                    datasets: [{
                        label: 'Lượt truy cập',
                        data: data,
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            }

            </script>
        </section>
    </div>
    <div class="col-md-4 bieu-do_">
        <section class="body-bieu-do">
            <h6>Doanh thu theo 7 ngày gần đây (VNĐ)</h6>
            <canvas id="doanhThu" style="width: 100%;height: 300px;"></canvas>
            <script>
            var ctx = document.getElementById('doanhThu').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'pie',
                data: {
                    labels: ['Thứ 2', 'Thứ 3', 'Thứ 4', 'Thứ 5', 'Thứ 6', 'Hôm qua',
                        'Hôm nay'
                    ],
                    datasets: [{
                        label: 'Doanh thu VNĐ',
                        data: [100002, 188779, 3877788, 555666, 2005550, 3555222,
                            2333324
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }]
                    }
                }
            });
            </script>
        </section>
    </div>
</section>