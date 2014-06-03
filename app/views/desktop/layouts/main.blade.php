<!DOCTYPE html>
 <html>
        <head>
        @include('desktop.core.head')
        </head>
         <body>
                <div id="header">
                @include('desktop.core.header')
                </div>
                
                <div id="content">
                @yield('page-content')
                </div>
                
                <div id="overlays">
                @include('desktop.core.overlays')
                </div>
                
                <div id="footer">
                @include('desktop.core.footer')
                </div>
         </body>
 </html> 