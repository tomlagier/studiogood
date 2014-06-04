<!DOCTYPE html>
 <html>
        <head>
        @include('desktop.core.head')
        </head>
         <body>
         	<div id="page-scripts">
            @yield('page-scripts')
         	</div>
            <div id="content">
            @yield('page-content')
            </div> 
         </body>
 </html> 