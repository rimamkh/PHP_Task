@extends('layouts.graph')
@section('content')
<style>
    body {font-family: Arial;}
    
    /* Style the tab */
    .tab {
      overflow: hidden;
      border: 1px solid #ccc;
      background-color: #f1f1f1;
    }
    
    /* Style the buttons inside the tab */
    .tab button {
      background-color: inherit;
      float: left;
      border: none;
      outline: none;
      cursor: pointer;
      padding: 14px 16px;
      transition: 0.3s;
      font-size: 17px;
    }
    
    /* Change background color of buttons on hover */
    .tab button:hover {
      background-color: #ddd;
    }
    
    /* Create an active/current tablink class */
    .tab button.active {
      background-color: #ccc;
    }
    
    /* Style the tab content */
    .tabcontent {
      display: none;
      padding: 6px 12px;
      border: 1px solid #ccc;
      border-top: none;
    }
    </style>
    <!-- Tab links -->
    
    <div class="tab">
        <button class="tablinks" onclick="openTab(event, 'details')">Product details</button>
        <button class="tablinks" onclick="openTab(event, 'price')">Price history</button>
        <button class="tablinks" onclick="openTab(event, 'quantity')">Quantity History</button>
    </div>

    <!-- Tab content -->
    <div id="details" class="tabcontent">
        <table class="table table-bordered table-dark mt-5">
            <thead>
                <tr>
                   
                    <th scope="col">ProductName</th>
                    <th scope="col">EAN</th>
                    <th scope="col">Type</th>
                    <th scope="col">Weight</th>
                    <th scope="col">Color</th>
                    <th scope="col">Active</th>
                    <th scope="col">Image</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $i)
                    <tr>
                        <td>{{ $i->ProductName }}</td>
                        <td>{{ $i->EAN }}</td>
                        <td>{{ $i->Type }}</td>
                        <td>{{ $i->Weight }}</td>
                        <td>{{ $i->Color }}</td>                      
                        <td>{{ $i->Active }}</td>
                        <td>{{ $i->Image }}</td>
       
                    </tr>
                @endforeach

            </tbody>
        </table>
       
    </div>

    <div id="price" class="tabcontent">
        <table class="table table-bordered table-dark mt-5">
            <thead>
                <tr>
                    <th scope="col">price</th>
                    <th scope="col">date</th>
                   
                   
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $i)
                    <tr>
                                             
                        <td>{{ $i->price }}</td>
                        <td>{{ $i->created_at->diffForHumans()  }}</td>
                        
       
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>

    <div id="quantity" class="tabcontent">
        <table class="table table-bordered table-dark mt-5">
            <thead>
                <tr>
                    <th scope="col">quantity</th>
                    <th scope="col">date</th>
                   
                   
                    
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $i)
                    <tr>
                                             
                        <td>{{ $i->quantity }}</td>
                        <td>{{ $i->created_at->diffForHumans()  }}</td>
                        
       
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
    <div style="width: 50%;">
        {!! $price->container() !!} 
   </div>
@endsection
<script>
    function openTab(evt, itemName) {
      var i, tabcontent, tablinks;
      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablinks");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
      }
      document.getElementById(itemName).style.display = "block";
      evt.currentTarget.className += " active";
    }
    </script>
