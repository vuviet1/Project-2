@extends('layouts.app')

@section('custom_styles')

@endsection

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">Departments</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{url('depart')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-warning text-white mb-4">
                    <div class="card-body">Employees</div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{url('employee')}}">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
                        Biểu đồ học sinh nhập học theo từng năm
            </div>
            <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
        </div>
        <div class="row">
            <div class="card-header">
                <i class="fas fa-chart-bar me-1"></i>
                        Biểu đồ học phí thu được theo từng năm
            </div>
            <form action="{{ route('chartsearch')}}" method="post">
                @csrf
                <div>
                <label for="startYear">Start Year:</label>
                <input type="text" id="startYear" name="startYear" min="2000" max="2099" step="1" required>
              </div>

              <div>
                <label for="endYear">End Year:</label>
                <input type="text" id="endYear" name="endYear" min="2000" max="2099" step="1" required>
              </div>
              <button type="submit"> Tìm kiếm</button>
            </form>
            <div class="card-body"><canvas id="BarChart1" width="100%" height="40"></canvas></div>
        </div>

    </div>
    <!-- /.container-fluid -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        var _ydata=JSON.parse('{!! json_encode($years) !!}');
        var _xdata=JSON.parse('{!! json_encode($yearsCount) !!}');
        var _adata = {!! $yearss !== null ? json_encode($yearss) : 'null' !!};
        var _bdata = {!! $totals !== null ? json_encode($totals) : 'null' !!};

    </script>
    <script>
        Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#292b2c';

// Bar Chart Example
var ctx = document.getElementById("myBarChart");
var myLineChart = new Chart(ctx, {
  type: 'bar',
  data: {
    labels: _ydata,
    datasets: [{
      label: "Số lượng học sinh",
      backgroundColor: "rgba(2, 117, 216, 1)",
      borderColor: "rgba(2, 117, 216, 1)",
      data: _xdata,
      borderWidth: 1,
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'year'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 5,
        }
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true,
          min: 0,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    },

  },
});
var ctt = document.getElementById("BarChart1");
var myLineChart1 = new Chart(ctt, {
  type: 'line',
  data: {
    labels: _adata,
    datasets: [{
      label: "Tổng tiền",
      backgroundColor: "rgba(255, 255, 255, 255)",
      borderColor: "rgba(2, 117, 216, 1)",
      data: _bdata,
    }],
  },
  options: {
    scales: {
      xAxes: [{
        time: {
          unit: 'year'
        },
        gridLines: {
          display: false
        },
        ticks: {
          maxTicksLimit: 5,
        }
      }],
      yAxes: [{
        ticks: {
          beginAtZero: true,
          min: 0,
          maxTicksLimit: 5
        },
        gridLines: {
          display: true
        }
      }],
    },
    legend: {
      display: false
    },

  },
});
    </script>
@endsection
