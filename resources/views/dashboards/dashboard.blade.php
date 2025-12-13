@extends('layout.main')
@section('dashboard')
    

  <main id="main" class="main">
  <!-- @if (session('status'))
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{ session('status') }}
    </div>
@endif -->

    <div class="pagetitle">
      <h1>Dashboard </h1>
      
    </div><!-- End Page Title -->
   
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">


                <div class="card-body">
                  <h5 class="card-title">Balance</h5>

                  <div class="d-flex align-items-center">
                    
                    <div class="ps-3">
                    <div style="display: flex; ">
                      <h6 >{{ auth()->user()->balance }} </h6>
                      <p style="font-size: 20px; margin:0 10px;;"></p>
                    </div>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

               

                <div class="card-body" style=" width:max-content; " style=" width:max-content; " >
                  <h5 class="card-title">PlasticCard </h5>

                  <div class="d-flex align-items-center">
                   
                    <div class="ps-3">
                      <h6 >{{auth()->user()->card}}</h6>

                    </div>
                  </div>
                </div>

              </div>
              
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

            

              
              </div>
            </div><!-- End Customers Card -->
        
          
            <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

              

                <div class="card-body">
                  <h5 class="card-title"> Expenses</h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                    
                        <th scope="col">Customer</th>
                        <th scope="col">Card</th>
                        <th scope="col">Price</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody> 
                   
                    @foreach($payments as $payment)
                      @if(auth()->user()->id == $payment->payer )
                          <tr>
                        
                            <td>{{$payment->user->username}}</td>
                            <td>{{$payment->user->card}} </td>
                            <td style="color: red;">-{{$payment->amount}} sum</td>
                            <td>{{$payment->created_at}} </td>
                            <td><span class="badge bg-success">Approved</span></td>
                          </tr>
                        @endif
                      
                     @endforeach
                    </tbody>
                  </table>

                </div>
                <div class="card-body">
                  <h5 class="card-title">Profits </h5>

                  <table class="table table-borderless datatable">
                    <thead>
                      <tr>
                 
                        <th scope="col">Customer</th>
                        <th scope="col">Card</th>
                        <th scope="col">Price</th>
                        <th scope="col">Date  </th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody> 
                   
                    @foreach($payments as $payment)
                      @if(auth()->user()->id == $payment->user_id )
                        @if($payment->positive == true)
                          <tr>
                           
                            
                            <td>{{$payment->payerUser->username}}</td>
                            <td>{{$payment->payerUser->card}} </td>
                            <td style="color: green;">+{{$payment->amount}} sum</td>
                            <td>{{$payment->created_at}} </td>
                            <td><span class="badge bg-success">Approved</span></td>
                          </tr>
                        @endif
                      @endif
                     @endforeach
                    </tbody>
                  </table>

                </div>

              </div>
            </div><!-- End Recent Sales -->

       
          </div>
        </div><!-- End Left side columns -->
      

        <!-- Right side columns -->
        <div class="col-lg-4">

      

          <!-- Website Traffic -->
          <div class="card">
       
            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px;" class="echart"></div>
            

<script>
document.addEventListener("DOMContentLoaded", () => {
  echarts.init(document.querySelector("#trafficChart")).setOption({
    tooltip: {
      trigger: 'item'
    },
    legend: {
      top: '5%',
      left: 'center'
    },
    series: [{
      name: 'Access From',
      type: 'pie',
      radius: ['40%', '70%'],
      avoidLabelOverlap: false,
      label: {
        show: false,
        position: 'center'
      },
      emphasis: {
        label: {
          show: true,
          fontSize: '18',
          fontWeight: 'bold'
        }
      },
      labelLine: {
        show: false
      },
      data: <?php echo json_encode($data); ?>
    }]
  });
});
</script>

            </div>
          </div><!-- End Website Traffic -->

         
        </div><!-- End Right side columns -->

      </div>
    </section>
    

    
                  


  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
 

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.min.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

@endsection