@extends("home.layout")
@section("content")
<div id="content">
    <div class="container" id="about">
        <div class="row">
            <!-- sidebar -->
            <div class="span3 sidebar">
                <div class="section-menu">
                    <ul class="nav nav-list">
                        <li class="nav-header">In This Section</li>
                        <li class="active"><a href="#" class="first">Analyze Data <small>View Data Statistics... </small><i class="icon-angle-right"></i></a></li>
<!--                        <li><a href="team.htm">The Team <small>Our team of stars</small><i class="icon-angle-right"></i></a></li>-->
<!--                        <li><a href="contact.htm">Contact Us<small>How to get in touch</small><i class="icon-angle-right"></i></a></li>-->
                    </ul>
                </div>
            </div>

            <!--main content-->

            <div class="span9">
                <h2 class="title-divider"><span>Data <span class="de-em">Analysis</span></span> <small>Select Counties Whose Data To Analyse...</small></h2>

                <h4>Instructions:</h4>
                <p>
                    To analyze County Data, Simply:
                    <ol type="1.">
                    <li>Select the Counties whose data you want to compare from the four options below. (You can leave them as none).</li>
                    <li>Click the "Go" Button</li>
                    <li>Watch the Magic!!!</li>
                    </ol>

                </p>
                <hr>
                  <div class="span6" style="float:none; margin:0 auto 0;">
                     <form method="post" action="/analysis">
                         <table class="table ">
                             <thead>
                             <tr>
                                 <th>Number</th>
                                 <th>County</th>

                             </tr>
                             </thead>
                             <tbody>


                             <tr>
                                 <td>1</td>
                                 <td>
                                     <select name="choice[]">
                                         <option value="0">None</option>
                                         @foreach($countyData as $county)
                                         <option value="{{$county->id}}">{{$county->county}}</option>
                                         @endforeach

                                     </select>
                                 </td>
                             </tr>
                             <tr>

                                 <td>2</td>
                                 <td>
                                     <select name="choice[]">
                                         <option value="0">None</option>
                                         @foreach($countyData as $county)
                                         <option value="{{$county->id}}">{{$county->county}}</option>
                                         @endforeach

                                     </select>
                                 </td>
                             </tr>
                             <tr>
                                 <td>3</td>
                                 <td>
                                     <select name="choice[]">
                                         <option value="0">None</option>
                                         @foreach($countyData as $county)
                                         <option value="{{$county->id}}">{{$county->county}}</option>
                                         @endforeach

                                     </select>
                                 </td>
                             </tr>
                             <tr>

                                 <td>4</td>
                                 <td>
                                     <select name="choice[]">
                                         <option value="0">None</option>
                                         @foreach($countyData as $county)
                                         <option value="{{$county->id}}">{{$county->county}}</option>
                                         @endforeach

                                     </select>
                                 </td>
                             </tr>
                             </tbody>
                         </table>

                         <h5>Data Sets to Use:</h5>
                         <label class="checkbox">
                             <input type="checkbox" name="dataset[]" value="poverty"  required>
                             Poverty. </label>
                         <label class="checkbox">
                             <input type="checkbox" name="dataset[]" value="morbidity" >
                             Morbidity. </label>
                         <label class="checkbox">
                             <input type="checkbox" name="dataset[]" value="education" >
                             Education. </label>


                         <button style="float:right;" class="btn btn-primary btn-large" type="submit"><i class="icon-cogs"></i> Analyze!!</button>
                     </form>


                  </div>
                <div class="span4">

                    <p>

                    </p>
                </div>



            </div>
        </div>
    </div>
</div>

@stop