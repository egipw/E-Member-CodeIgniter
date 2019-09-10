<script type="text/javascript">
var data = {
            labels: [
            
            <?php
            for ($i=0; $i <= 7; $i++) {
                  $array[] = $this->pustaka->tanggal_indo_string_bulan_tahun(date("m-Y", strtotime("-" . $i . " months")));
            }
            foreach (array_reverse($array) as $item) {
                  echo '"'.$item.'",';
             }
             unset($array);
            ?>
            ],
            datasets: [
                  {
                        label: "Data Laporan Kegiatan",
                        fillColor: "rgba(251, 140, 1,0.2)",
                        strokeColor: "rgba(251, 140, 1,1)",
                        pointColor: "rgba(251, 140, 1,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(251, 140, 1,1)",
                        data: [
                        <?php
                        for ($i=0; $i <= 7; $i++) {
                              $bulan = explode('-', date("m-Y", strtotime("-" . $i . " months")))[0];
                              $tahun = explode('-', date("m-Y", strtotime("-" . $i . " months")))[1];

                              $array[] = $this->db->query("
                                    SELECT count(*) total
                                    FROM laporan_kegiatan
                                    WHERE month(tanggal) = ?
                                    AND year(tanggal) = ?
                              ", [$bulan, $tahun])->row()->total;             
                        }
                        foreach (array_reverse($array) as $item) {
                              echo '"'.$item.'",';
                         }
                         unset($array);
                        ?>
                        ]
                  }
            ]
      };
      var pdata = [
            {
                  value: 300,
                  color:"#F7464A",
                  highlight: "#FF5A5E",
                  label: "Red"
            },
            {
                  value: 50,
                  color: "#46BFBD",
                  highlight: "#5AD3D1",
                  label: "Green"
            },
            {
                  value: 100,
                  color: "#FDB45C",
                  highlight: "#FFC870",
                  label: "Yellow"
            }
      ]

var ctxl = $("#lineChartDemo_laporan_kegiatan").get(0).getContext("2d");
var lineChart = new Chart(ctxl).Line(data, {
   responsive : true,
   animation: true,
   barValueSpacing : 5,
   barDatasetSpacing : 1,
   tooltipFillColor: "rgba(0,0,0,0.8)",                
   multiTooltipTemplate: "<%= datasetLabel %> - <%= value %>"
});
</script>

<script type="text/javascript">
var data = {
            labels: [
            
            <?php
            for ($i=0; $i <= 7; $i++) {
                  $array[] = $this->pustaka->tanggal_indo_string_bulan_tahun(date("m-Y", strtotime("-" . $i . " months")));
            }
            foreach (array_reverse($array) as $item) {
                  echo '"'.$item.'",';
             }
             unset($array);
            ?>
            ],
            datasets: [
                  {
                        label: "Data Gangguan",
                        fillColor: "rgba(0, 0, 139,0.2)",
                        strokeColor: "rgba(0, 0, 139,1)",
                        pointColor: "rgba(0, 0, 139,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(0, 0, 139,1)",
                        data: [
                        <?php
                        for ($i=0; $i <= 7; $i++) {
                              $bulan = explode('-', date("m-Y", strtotime("-" . $i . " months")))[0];
                              $tahun = explode('-', date("m-Y", strtotime("-" . $i . " months")))[1];

                              $array[] = $this->db->query("
                                    SELECT count(*) total
                                    FROM laporan_kegiatan
                                    WHERE id_kategori = 'ktg01' 
                                    AND month(tanggal) = ?
                                    AND year(tanggal) = ?
                              ", [$bulan, $tahun])->row()->total;             
                        }
                        foreach (array_reverse($array) as $item) {
                              echo '"'.$item.'",';
                         }
                         unset($array);
                        ?>
                        ]
                  }
            ]
      };
      var pdata = [
            {
                  value: 300,
                  color:"#F7464A",
                  highlight: "#FF5A5E",
                  label: "Red"
            },
            {
                  value: 50,
                  color: "#46BFBD",
                  highlight: "#5AD3D1",
                  label: "Green"
            },
            {
                  value: 100,
                  color: "#FDB45C",
                  highlight: "#FFC870",
                  label: "Yellow"
            }
      ]

var ctxl = $("#lineChartDemo_harian").get(0).getContext("2d");
var lineChart = new Chart(ctxl).Line(data, {
   responsive : true,
   animation: true,
   barValueSpacing : 5,
   barDatasetSpacing : 1,
   tooltipFillColor: "rgba(0,0,0,0.8)",                
   multiTooltipTemplate: "<%= datasetLabel %> - <%= value %>"
});
</script>

<script type="text/javascript">
var data = {
            labels: [
            
            <?php
            for ($i=0; $i <= 7; $i++) {
                  $array[] = $this->pustaka->tanggal_indo_string_bulan_tahun(date("m-Y", strtotime("-" . $i . " months")));
            }
            foreach (array_reverse($array) as $item) {
                  echo '"'.$item.'",';
             }
             unset($array);
            ?>
            ],
            datasets: [

                 {
                        label: "Data Pelurusan Migrasi",
                        fillColor: "rgba(139, 5, 0,0.2)",
                        strokeColor: "rgba(139, 5, 0,1)",
                        pointColor: "rgba(139, 5, 0,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(139, 5, 0,1)",
                        data: [
                        <?php
                        for ($i=0; $i <= 7; $i++) {
                              $bulan = explode('-', date("m-Y", strtotime("-" . $i . " months")))[0];
                              $tahun = explode('-', date("m-Y", strtotime("-" . $i . " months")))[1];

                              $array[] = $this->db->query("
                                    SELECT count(*) total
                                    FROM laporan_kegiatan
                                    WHERE id_kategori = 'ktg02' 
                                    AND month(tanggal) = ?
                                    AND year(tanggal) = ?
                              ", [$bulan, $tahun])->row()->total;             
                        }
                        foreach (array_reverse($array) as $item) {
                              echo '"'.$item.'",';
                         }
                         unset($array);
                        ?>
                        ]
                  }
            ]
      };
      var pdata = [
            {
                  value: 300,
                  color:"#F7464A",
                  highlight: "#FF5A5E",
                  label: "Red"
            },
            {
                  value: 50,
                  color: "#46BFBD",
                  highlight: "#5AD3D1",
                  label: "Green"
            },
            {
                  value: 100,
                  color: "#FDB45C",
                  highlight: "#FFC870",
                  label: "Yellow"
            }
      ]

var ctxl = $("#lineChartDemo_gangguan").get(0).getContext("2d");
var lineChart = new Chart(ctxl).Line(data, {
   responsive : true,
   animation: true,
   barValueSpacing : 5,
   barDatasetSpacing : 1,
   tooltipFillColor: "rgba(0,0,0,0.8)",                
   multiTooltipTemplate: "<%= datasetLabel %> - <%= value %>"
});
</script>

<script type="text/javascript">
var data = {
            labels: [
            
            <?php
            for ($i=0; $i <= 7; $i++) {
                  $array[] = $this->pustaka->tanggal_indo_string_bulan_tahun(date("m-Y", strtotime("-" . $i . " months")));
            }
            foreach (array_reverse($array) as $item) {
                  echo '"'.$item.'",';
             }
             unset($array);
            ?>
            ],
            datasets: [
                  
                  {
                        label: "Data Lain-lain",
                        fillColor: "rgba(19,100,0,0.2)",
                        strokeColor: "rgba(19,100,0,1)",
                        pointColor: "rgba(19,100,0,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(19,100,0,1)",
                        data: [
                        <?php
                        for ($i=0; $i <= 7; $i++) {
                              $bulan = explode('-', date("m-Y", strtotime("-" . $i . " months")))[0];
                              $tahun = explode('-', date("m-Y", strtotime("-" . $i . " months")))[1];

                              $array[] = $this->db->query("
                                    SELECT count(*) total
                                    FROM laporan_kegiatan
                                    WHERE id_kategori = 'ktg03' 
                                    AND month(tanggal) = ?
                                    AND year(tanggal) = ?
                              ", [$bulan, $tahun])->row()->total;             
                        }
                        foreach (array_reverse($array) as $item) {
                              echo '"'.$item.'",';
                         }
                         unset($array);
                        ?>
                        ]
                  }
            ]
      };
      var pdata = [
            {
                  value: 300,
                  color:"#F7464A",
                  highlight: "#FF5A5E",
                  label: "Red"
            },
            {
                  value: 50,
                  color: "#46BFBD",
                  highlight: "#5AD3D1",
                  label: "Green"
            },
            {
                  value: 100,
                  color: "#FDB45C",
                  highlight: "#FFC870",
                  label: "Yellow"
            }
      ]

var ctxl = $("#lineChartDemo_migrasi").get(0).getContext("2d");
var lineChart = new Chart(ctxl).Line(data, {
   responsive : true,
   animation: true,
   barValueSpacing : 5,
   barDatasetSpacing : 1,
   tooltipFillColor: "rgba(0,0,0,0.8)",                
   multiTooltipTemplate: "<%= datasetLabel %> - <%= value %>"
});
</script>