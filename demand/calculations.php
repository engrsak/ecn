
<!DOCTYPE html>
<html lang="en">
<head>

	<title></title>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="team" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="icon" type="../image/png" href="images/fav.jpg">
     <link rel="stylesheet" href="../css/bootstrap.min.css">
     <link rel="stylesheet" href="../css/owl.carousel.css">
     <link rel="stylesheet" href="../css/owl.theme.default.min.css">
     <link rel="stylesheet" href="../css/font-awesome.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="../css/tooplate-style-app-content.css">

</head>
<body style="background: #151c2b;">
         <section id="f-content-n" style="margin-bottom: 30px;">
          <!-- <div class="overlay"></div> -->
          <div class="container">
               <div class="row">

                    <div class="col-lg-12" align="center">
                        <h1>Calculations</h1><br>
                        <h4 style="color: #fff;background: #29ca8e; font-weight: 600; text-transform: uppercase;padding: 5px 10px;border-radius: 20px;">Curves & Surplus</h4><!-- <hr> -->  <br>
                        <!-- <form action="" method="post" style="" class="cal-for"> -->
                          <div ng-app="">
                          <table style="width: 90%; text-align: center;" >
                            <tr>
                              <td>Qd = </td>
                              <td><input type="number" name="e" ng-model="e"  style="width: 100px;color: #000; font-weight: 700;border-radius: 20px;text-align: center;border: 1px solid #29ca8e;"></td>
                              <td> - </td>
                              <td><input type="number" name="f" ng-model="f"  style="width: 100px;color: #000; font-weight: 700;border-radius: 20px;text-align: center;border: 1px solid #29ca8e;"></td>
                              <td>P</td>
                            </tr>
                          </table><br>
                          <table style="width: 90%; text-align: center;" >
                            <tr>
                              <td>Qs = </td>
                              <td> - </td>
                              <td><input type="number" name="g" ng-model="g" style="width: 100px;color: #000; font-weight: 700;border-radius: 20px;text-align: center;border: 1px solid #29ca8e;"></td>
                              <td> + </td>
                              <td><input type="number" name="h" ng-model="h" style="width: 100px;color: #000; font-weight: 700;border-radius: 20px;text-align: center;border: 1px solid #29ca8e;"></td>
                              <td>P</td>
                            </tr>
                          </table><br>
                          <table style="width: 90%; border: 1px solid #29ca8e; text-align: center;" border="1">
                            <tr>
                              <td>P</td>
                              <td>Qd</td>
                              <td>Qs</td>
                            </tr>
                            <tr>
                              <td>0</td>
                              <td>{{ e }} </td>
                              <td>{{ -g }}</td>
                            </tr>
                            <tr>
                              <td>{{ e/f }}</td>
                              <td>0</td>
                              <td>{{ (e/f * h ) - g }}</td>
                            </tr>
                            <tr>
                              <td>{{ g/h }}</td>
                              <td></td>
                              <td>0</td>
                            </tr>
                            <tr>
                              <td>{{ (e+g) / (f+h) }}</td>
                              <td>{{ e - f*[(e+g)/(f+h)] }}</td>
                              <td>{{ h*[(e+g)/(f+h)] - g }}</td>
                            </tr>
                          </table><br>
                          <h5>Consumer Surplus = {{ [ (e/f) - ((e+g) / (f+h))/ 2] * [e - f*((e+g)/(f+h))]  }} </h5>
                          <h5>Producer Surplus = {{ [((e+g) / (f+h))/ 2 - (g/h) ] * [e - f*((e+g)/(f+h))] }} </h5>
                          <h5>Economic Surplus = {{ [(e/f) - ((e+g) / (f+h))/ 2] * [e - f*((e+g)/(f+h))] + [((e+g) / (f+h))/ 2 - (g/h) ] * [e - f*((e+g)/(f+h))] }}</h5>
                          <!-- <button type="submit" class="btn btn-primary" name="dem">Calculate</button>
                          </div>
                        </form> --><br>
                        <h4 style="color: #fff;background: #29ca8e; font-weight: 600; text-transform: uppercase;padding: 5px 10px;border-radius: 20px;">Elasticity of Demand</h4>
                        <!-- <hr> -->  
                          <table style="width: 90%; text-align: center;" >
                            <tr>
                              <td></td>
                              <td>Price</td>
                              <td>Quantity</td>
                            </tr>
                            <tr>
                              <td>Initial</td>
                              <td><input type="number" ng-model="a" style="width: 100px; color: #000; font-weight: 700; border-radius: 20px; text-align: center;border: 1px solid #29ca8e;margin: 2px;"></td>
                              <td><input type="number" ng-model="c" style="width: 100px; color: #000; font-weight: 700; border-radius: 20px; text-align: center;border: 1px solid #29ca8e;margin: 2px;"></td>
                            </tr>
                            <tr>
                              <td>Final</td>
                              <td><input type="number" ng-model="b" style="width: 100px; color: #000; font-weight: 700; border-radius: 20px; text-align: center;border: 1px solid #29ca8e;margin: 2px;"></td>
                              <td><input type="number" ng-model="d" style="width: 100px; color: #000; font-weight: 700; border-radius: 20px; text-align: center;border: 1px solid #29ca8e;margin: 2px;"></td>
                            </tr>
                          </table><br>
                            <h5>Point Elasticity of Demand = {{ ((d-c)*a)/((b-a)*c) }}</h5>
                            <h5>Arc Elasticity of Demand = {{ ((d-c)/(b-a))*((a+b)/(c+d)) }}</h5>
                            
                            <!-- <h6>Perfeetly Inelastic = {{ [(d-c)/(b-a)]*(a/c) }}</h6>
                            <h6>Inelastic Demand = {{ [(d-c)/(b-a)]*(a/c) }}</h6>
                            <h6>Unitary Inelastic Demand = {{ [(d-c)/(b-a)]*[(a+b)/(c+d)] }}</h6>
                            <h6>Elastic Demand = {{ [(d-c)/(b-a)]*(a/c) }}</h6>
                            <h6>Perfeetly Elastic = {{ [(d-c)/(b-a)]*(a/c) }}</h6> -->
                          <br>
                          <h4 style="color: #fff;background: #29ca8e; font-weight: 600; text-transform: uppercase;padding: 5px 10px;border-radius: 20px;">Elasticity of Supply</h4>
                          <!-- <hr>   -->
                          <table style="width: 90%; text-align: center;" >
                            <tr>
                              <td></td>
                              <td>Price</td>
                              <td>Quantity</td>
                            </tr>
                            <tr>
                              <td>Initial</td>
                              <td><input type="number" ng-model="i" style="width: 100px; color: #000; font-weight: 700; border-radius: 20px; text-align: center;border: 1px solid #29ca8e;margin: 2px;"></td>
                              <td><input type="number" ng-model="k" style="width: 100px; color: #000; font-weight: 700; border-radius: 20px; text-align: center;border: 1px solid #29ca8e;margin: 2px;"></td>
                            </tr>
                            <tr>
                              <td>Final</td>
                              <td><input type="number" ng-model="j" style="width: 100px; color: #000; font-weight: 700; border-radius: 20px; text-align: center;border: 1px solid #29ca8e;margin: 2px;"></td>
                              <td><input type="number" ng-model="l" style="width: 100px; color: #000; font-weight: 700; border-radius: 20px; text-align: center;border: 1px solid #29ca8e;margin: 2px;"></td>
                            </tr>
                          </table><br>
                          <h5>Point Elasticity of Supply = {{ ((l-k)*i)/((j-i)*k) }}</h5>
                          <h5>Arc Elasticity of Supply = {{ ((l-k)/(j-i))*((i+j)/(k+l)) }}</h5>
                          <!-- <h6>Perfeetly Inelastic = {{ (d - c) / [(d + c)/2] * [(b + a)/2]/(b - a) }}</h6>
                          <h6>Inelastic Demand = {{ (d - c) / [(d + c)/2] * [(b + a)/2]/(b - a) }}</h6>
                          <h6>Unitary Inelastic Supply = {{ (d - c) / [(d + c)/2] * [(b + a)/2]/(b - a) }}</h6>
                          <h6>Elastic Demand = {{ (d - c) / [(d + c)/2] * [(b + a)/2]/(b - a) }}</h6>
                          <h6>Perfeetly Elastic = {{ (d - c) / [(d + c)/2] * [(b + a)/2]/(b - a) }}</h6> -->
                        </div>
                      </div>
                         
                    </div>

               </div>
          </div>
     </section>



  

 <?php include('foot.php');?>