@extends('layout.admin')

@section('title', 'Dashboard | Smart Chikinot')

@section('page','Dashboard')

@section('content')
<div class="row mb-4">
  <div class="col-xl-3 col-sm-6 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Temperature</p>
              <h5 class="font-weight-bolder" style="font-size:32px"><span id="temp-value">0</span> °C </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-primary shadow-primary text-center rounded-circle">
              <i class="fas fa-temperature-high text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Humidity</p>
              <h5 class="font-weight-bolder" style="font-size:32px"><span id="humi-value">0</span> % </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-danger shadow-danger text-center rounded-circle">
              <i class="fas fa-tint text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-4">
    <div class="card h-100">
      <div class="card-body p-3">
        <div class="row">
          <div class="col-8">
            <div class="numbers">
              <p class="text-sm mb-0 text-uppercase font-weight-bold">Light Intensity</p>
              <h5 class="font-weight-bolder" style="font-size:32px"><span id="light-value">0</span> lux </h5>
            </div>
          </div>
          <div class="col-4 text-end">
            <div class="icon icon-shape bg-gradient-success shadow-success text-center rounded-circle">
              <i class="far fa-lightbulb text-lg opacity-10" aria-hidden="true"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-4">
    <div class="row">
      <div class="col-xl-12 mb-2">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Heater Status</p>
                  <h5 class="font-weight-bolder">
                    ON
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                  <i class="fas fa-birthday-cake text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-12">
        <div class="card">
          <div class="card-body p-3">
            <div class="row">
              <div class="col-8">
                <div class="numbers">
                  <p class="text-sm mb-0 text-uppercase font-weight-bold">Lamp Status</p>
                  <h5 class="font-weight-bolder">
                    ON
                  </h5>
                </div>
              </div>
              <div class="col-4 text-end">
                <div class="icon icon-shape bg-gradient-warning shadow-warning text-center rounded-circle">
                  <i class="fas fa-lightbulb text-lg opacity-10" aria-hidden="true"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row mb-4">
  <div class="col-xl-12">
    <div class="card z-index-2 h-100">
      <div class="card-header pb-0 pt-3 bg-transparent">
        <h6 class="text-capitalize">Activity Log</h6>
        <p class="text-sm mb-0">
          <i class="fa fa-arrow-up text-success"></i>
          <span class="font-weight-bold">per jam</span> in 2024
        </p>
      </div>
      <div class="card-body p-3">
        <div class="chart">
          <canvas id="chart-line" class="chart-canvas" height="300"></canvas>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="row">
  <div class="col-xl-6">
    <div class="card ">
      <div class="card-header pb-0 p-3">
        <div class="d-flex justify-content-between">
          <h6 class="mb-2">Heater Status</h6>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center ">
          <tbody>
          <tr>
              <td class="w-30">
                <div class="d-flex px-2 py-1 align-items-center">
                  <div>
                    <img src="{{ asset('img/Amelia-Fadhil.png') }}" class="avatar avatar-sm">
                  </div>
                  <div class="ms-4">
                    <p class="text-xs font-weight-bold mb-0">User</p>
                    <h6 class="text-sm mb-0">1</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Device id</p>
                  <h6 class="text-sm mb-0">A001</h6>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Status</p>
                  <h6 class="text-sm mb-0">Automatic</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Batas suhu</p>
                  <h6 class="text-sm mb-0">25°C</h6>
                </div>
              </td>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
            <tr>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="col-xl-6">
    <div class="card ">
      <div class="card-header pb-0 p-3">
        <div class="d-flex justify-content-between">
          <h6 class="mb-2">Lamp Status</h6>
        </div>
      </div>
      <div class="table-responsive">
        <table class="table align-items-center ">
          <tbody>
            <tr>
              <td class="w-30">
                <div class="d-flex px-2 py-1 align-items-center">
                  <div>
                    <img src="{{ asset('img/Amelia-Fadhil.png') }}" class="avatar avatar-sm">
                  </div>
                  <div class="ms-4">
                    <p class="text-xs font-weight-bold mb-0">User</p>
                    <h6 class="text-sm mb-0">1</h6>
                  </div>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Device id</p>
                  <h6 class="text-sm mb-0">A002</h6>
                </div>
              </td>
              <td>
                <div class="text-center">
                  <p class="text-xs font-weight-bold mb-0">Status</p>
                  <h6 class="text-sm mb-0">On</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Time Off</p>
                  <h6 class="text-sm mb-0">23.00</h6>
                </div>
              </td>
              <td class="align-middle text-sm">
                <div class="col text-center">
                  <p class="text-xs font-weight-bold mb-0">Time On</p>
                  <h6 class="text-sm mb-0">01.00</h6>
                </div>
              </td>
            </tr>
            <tr>
            </tr>
            <tr>
              <td class="align-middle text-sm">
              </td>
            </tr>
            <tr>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<script src="https://unpkg.com/mqtt/dist/mqtt.min.js"></script>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="{{ asset('js/plugins/chartjs.min.js') }}"></script>
<script>
  $(document).ready(function() {
    let timeNow = [];

    function addData(msg) {
      // Add to database with Jquery AJAX over http REST API
      $.post("http://127.0.0.1:8000/api/sensor", {
          device_kode: msg.device_kode,
          temperature: msg.temperature,
          humidity: msg.humidity,
          ldr: msg.ldr
        },
        function(message) {
          console.log(message);
        });

      // Membuat time sekarang dalam HH:MM:SS
      let now = new Date();
      timeNow.push(now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds());

      // Cek isi array => biar di chart tidak terlalu banyak
      if (myChart.data.datasets[0].data.length === 7) {
        myChart.data.datasets[0].data.shift();
        myChart.data.datasets[1].data.shift();
        myChart.data.datasets[2].data.shift();
        timeNow.shift();
      }

      // Add to chart
      myChart.data.datasets[0].data.push(msg.temperature);
      myChart.data.datasets[1].data.push(msg.humidity);
      myChart.data.datasets[2].data.push(msg.ldr);
      myChart.data.labels = timeNow;
      myChart.update();

      // Me replace value from mqtt to html blade over jquery
      // $('#temperature').text(myChart.data.datasets[0].data.findLast(element => element));
      // $('#humidity').text(myChart.data.datasets[1].data.findLast(element => element));
      // $('#intensitasCahaya').text(myChart.data.datasets[2].data.findLast(element => element));
    }
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    var myChart = new Chart(ctx1, {
      type: "line",
      data: {
        labels: [],
        datasets: [{
          label: "Temperature",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [],
          maxBarThickness: 6

        }, {
          label: "Humidity",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [],
          maxBarThickness: 6

        }, {
          label: "Light Intesity",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [],
          maxBarThickness: 6

        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
    const url = 'wss://s8950e54.ala.asia-southeast1.emqxsl.com:8084/mqtt'
    const options = {
      clean: true,
      connectTimeout: 4000,
      clientId: 'Nur',
      username: 'Ameliail30',
      password: 'Ameliafadhil30',
      ca: `-----BEGIN CERTIFICATE-----
MIIDrzCCApegAwIBAgIQCDvgVpBCRrGhdWrJWZHHSjANBgkqhkiG9w0BAQUFADBh
MQswCQYDVQQGEwJVUzEVMBMGA1UEChMMRGlnaUNlcnQgSW5jMRkwFwYDVQQLExB3
d3cuZGlnaWNlcnQuY29tMSAwHgYDVQQDExdEaWdpQ2VydCBHbG9iYWwgUm9vdCBD
QTAeFw0wNjExMTAwMDAwMDBaFw0zMTExMTAwMDAwMDBaMGExCzAJBgNVBAYTAlVT
MRUwEwYDVQQKEwxEaWdpQ2VydCBJbmMxGTAXBgNVBAsTEHd3dy5kaWdpY2VydC5j
b20xIDAeBgNVBAMTF0RpZ2lDZXJ0IEdsb2JhbCBSb290IENBMIIBIjANBgkqhkiG
9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4jvhEXLeqKTTo1eqUKKPC3eQyaKl7hLOllsB
CSDMAZOnTjC3U/dDxGkAV53ijSLdhwZAAIEJzs4bg7/fzTtxRuLWZscFs3YnFo97
nh6Vfe63SKMI2tavegw5BmV/Sl0fvBf4q77uKNd0f3p4mVmFaG5cIzJLv07A6Fpt
43C/dxC//AH2hdmoRBBYMql1GNXRor5H4idq9Joz+EkIYIvUX7Q6hL+hqkpMfT7P
T19sdl6gSzeRntwi5m3OFBqOasv+zbMUZBfHWymeMr/y7vrTC0LUq7dBMtoM1O/4
gdW7jVg/tRvoSSiicNoxBN33shbyTApOB6jtSj1etX+jkMOvJwIDAQABo2MwYTAO
BgNVHQ8BAf8EBAMCAYYwDwYDVR0TAQH/BAUwAwEB/zAdBgNVHQ4EFgQUA95QNVbR
TLtm8KPiGxvDl7I90VUwHwYDVR0jBBgwFoAUA95QNVbRTLtm8KPiGxvDl7I90VUw
DQYJKoZIhvcNAQEFBQADggEBAMucN6pIExIK+t1EnE9SsPTfrgT1eXkIoyQY/Esr
hMAtudXH/vTBH1jLuG2cenTnmCmrEbXjcKChzUyImZOMkXDiqw8cvpOp/2PV5Adg
06O/nVsJ8dWO41P0jmP6P6fbtGbfYmbW0W5BjfIttep3Sp+dWOIrWcBAI+0tKIJF
PnlUkiaY4IBIqDfv8NZ5YBberOgOzW6sRBc4L0na4UU+Krk2U886UAb3LujEV0ls
YSEY1QSteDwsOoBrp+uvFRTp2InBuThs4pFsiv9kuXclVzDAGySj4dzp30d8tbQk
CAUw7C29C79Fv1C5qfPrmAESrciIxpg0X40KPMbp1ZWVbd4=
-----END CERTIFICATE-----`
    }
    const client = mqtt.connect(url, options)
    client.on('connect', function() {
      console.log('Connected')
      client.subscribe('/temperature', function(err) {
        if (err) {
          console.log(err)
        } else {
          console.log('Subscribe in /temperature')
        }
      })
      let pub = {
        "value": 1
      }
      pub = JSON.stringify(pub);
      client.publish('/lamp', pub, function(err) {
        if (err) {
          console.log(err)
        } else {
          console.log('Published')
        }
      })
    })

    client.on('message', async function(topic, message) {
      if (topic == '/temperature') {
        if (typeof message == 'object') {
          const data = JSON.parse(message.toString());
          console.log('Received message:', data);

          // Extract data
          const deviceKode = data.device_kode;
          const temperature = data.temperature;
          const humidity = data.humidity;
          const ldr = data.ldr;

          let data1 = parseFloat(temperature).toFixed(2)
          let data2 = parseFloat(ldr).toFixed(2)

          $('#temp-value').html(data1)
          $('#humi-value').html(humidity)
          $('#light-value').html(data2)
          
          client.on('message', function(topic, message) {
      if (topic == '/temperature') {
        const msg = JSON.parse(message)
        if (typeof msg == 'object') {
          addData(msg)
        }
      }
    })
        }
      }
    })
  })
</script>
@endsection