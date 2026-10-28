@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

<!-- Dashboard Overview -->

<div class="dashboard-content-wrapper">

<div class="dashboard-overview">

    <div class="dashboard-title">

        <h2>Dashboard Overview</h2>

        <p>Welcome back, {{ Auth::user()->name }}</p>

    </div>

</div>

<!-- ================================
        Statistics Cards
================================ -->

<div class="dashboard-cards">

    <div class="dashboard-card">

        <div class="dashboard-card-icon students">
            <i class="fa-solid fa-user-graduate"></i>
        </div>

        <div class="dashboard-card-info">
            <h5>Total Students</h5>
            <h2>2,450</h2>
            <span>+18 this month</span>
        </div>

    </div>

    <div class="dashboard-card">

        <div class="dashboard-card-icon teachers">
            <i class="fa-solid fa-chalkboard-user"></i>
        </div>

        <div class="dashboard-card-info">
            <h5>Total Teachers</h5>
            <h2>120</h2>
            <span>Active Faculty</span>
        </div>

    </div>

    <div class="dashboard-card">

        <div class="dashboard-card-icon departments">
            <i class="fa-solid fa-building-columns"></i>
        </div>

        <div class="dashboard-card-info">
            <h5>Departments</h5>
            <h2>15</h2>
            <span>Academic Departments</span>
        </div>

    </div>

    <div class="dashboard-card">

        <div class="dashboard-card-icon admissions">
            <i class="fa-solid fa-file-circle-check"></i>
        </div>

        <div class="dashboard-card-info">
            <h5>New Admissions</h5>
            <h2>85</h2>
            <span>This Month</span>
        </div>

    </div>

</div>






<!--==============================
    Dashboard Row 2
===============================-->

<div class="dashboard-row">

    <!-- Admission Overview -->
    <div class="overview-card">

        <div class="card-header">
            <h3>Admission Overview</h3>

            <select>
                <option>This Year</option>
                <option>Last Year</option>
            </select>
        </div>

        <div class="chart-box">

            <canvas id="admissionChart"></canvas>

        </div>

    </div>



    <!-- Quick Actions -->

    <div class="quick-actions">

        <h3>Quick Actions</h3>

        <a href="#">
            <div class="action-left">
                <i class="fa-solid fa-user-plus"></i>
                <span>Add New Student</span>
            </div>

            <i class="fa-solid fa-angle-right"></i>
        </a>

        <a href="#">
            <div class="action-left">
                <i class="fa-solid fa-chalkboard-user"></i>
                <span>Add New Teacher</span>
            </div>

            <i class="fa-solid fa-angle-right"></i>
        </a>

        <a href="#">
            <div class="action-left">
                <i class="fa-solid fa-book"></i>
                <span>Create New Course</span>
            </div>

            <i class="fa-solid fa-angle-right"></i>
        </a>

        <a href="#">
            <div class="action-left">
                <i class="fa-solid fa-bullhorn"></i>
                <span>Add Notice</span>
            </div>

            <i class="fa-solid fa-angle-right"></i>
        </a>

        <a href="#">
            <div class="action-left">
                <i class="fa-solid fa-calendar-plus"></i>
                <span>Schedule Event</span>
            </div>

            <i class="fa-solid fa-angle-right"></i>
        </a>

    </div>




    <!-- Upcoming Events -->

    <div class="events-card">

        <div class="event-header">
            <h3>Upcoming Events</h3>

            <a href="#">View All</a>
        </div>


        <div class="event-item">

            <div class="event-date red">
                <h2>25</h2>
                <span>MAY</span>
            </div>

            <div class="event-content">

                <h4>Annual Sports Day</h4>

                <p>
                    <i class="fa-regular fa-clock"></i>
                    10:00 AM - 4:00 PM
                </p>

                <p>
                    <i class="fa-solid fa-location-dot"></i>
                    College Ground
                </p>

            </div>

        </div>



        <div class="event-item">

            <div class="event-date green">
                <h2>02</h2>
                <span>JUN</span>
            </div>

            <div class="event-content">

                <h4>Final Year Project Expo</h4>

                <p>
                    <i class="fa-regular fa-clock"></i>
                    9:00 AM - 2:00 PM
                </p>

                <p>
                    <i class="fa-solid fa-location-dot"></i>
                    Main Auditorium
                </p>

            </div>

        </div>




        <div class="event-item">

            <div class="event-date purple">
                <h2>10</h2>
                <span>JUN</span>
            </div>

            <div class="event-content">

                <h4>Parent Teacher Meeting</h4>

                <p>
                    <i class="fa-regular fa-clock"></i>
                    11:00 AM - 1:00 PM
                </p>

                <p>
                    <i class="fa-solid fa-location-dot"></i>
                    Seminar Hall
                </p>

            </div>

        </div>




        <div class="event-item">

            <div class="event-date orange">
                <h2>18</h2>
                <span>JUN</span>
            </div>

            <div class="event-content">

                <h4>College Foundation Day</h4>

                <p>
                    <i class="fa-regular fa-clock"></i>
                    All Day Event
                </p>

                <p>
                    <i class="fa-solid fa-location-dot"></i>
                    College Campus
                </p>

            </div>

        </div>

    </div>

</div>








<!--====================================
        Dashboard Bottom Section
=====================================-->

<div class="dashboard-bottom">

    <!-- Recent Admissions -->

    <div class="recent-admissions">

        <div class="card-title">
            <h3>Recent Admissions</h3>
            <a href="#">View All</a>
        </div>

        <table>

            <thead>

                <tr>
                    <th>Student</th>
                    <th>Course</th>
                    <th>Date</th>
                    <th>Status</th>
                </tr>

            </thead>

            <tbody>

                <tr>
                    <td>Rafi Ahmed</td>
                    <td>B.Sc in CSE</td>
                    <td>May 20, 2024</td>
                    <td><span class="status enrolled">Enrolled</span></td>
                </tr>

                <tr>
                    <td>Nusrat Jahan</td>
                    <td>BBA</td>
                    <td>May 19, 2024</td>
                    <td><span class="status enrolled">Enrolled</span></td>
                </tr>

                <tr>
                    <td>Abdullah Al Mamun</td>
                    <td>EEE</td>
                    <td>May 18, 2024</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>

                <tr>
                    <td>Tanvir Islam</td>
                    <td>Pharmacy</td>
                    <td>May 17, 2024</td>
                    <td><span class="status enrolled">Enrolled</span></td>
                </tr>

                <tr>
                    <td>Sohanur Rahman</td>
                    <td>CSE</td>
                    <td>May 16, 2024</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>

            </tbody>

        </table>

    </div>



    <!-- Notice Board -->

    <div class="notice-board">

        <div class="card-title">
            <h3>Notice Board</h3>
            <a href="#">View All</a>
        </div>

        <div class="notice-item">
            <h4>Final Exam Routine Published</h4>
            <p>The final examination routine has been published.</p>
        </div>

        <div class="notice-item">
            <h4>Library Closed on Sunday</h4>
            <p>The library will remain closed every Sunday.</p>
        </div>

        <div class="notice-item">
            <h4>Scholarship Program</h4>
            <p>Applications are now open for scholarships.</p>
        </div>

        <div class="notice-item">
            <h4>Holiday Notice</h4>
            <p>College will remain closed on National Holiday.</p>
        </div>

    </div>



    <!-- Calendar -->

    <div class="calendar-card">

        <div class="card-title">
            <h3>Calendar</h3>
        </div>

        <table class="calendar-table">

            <thead>

                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </tr>

            </thead>

            <tbody>

                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                </tr>

                <tr>
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                </tr>

                <tr>
                    <td>12</td>
                    <td>13</td>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                </tr>

                <tr>
                    <td>19</td>
                    <td>20</td>
                    <td class="active-day">21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                </tr>

                <tr>
                    <td>26</td>
                    <td>27</td>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td>31</td>
                    <td></td>
                </tr>

            </tbody>

        </table>

    </div>

</div>

</div>



@section('scripts')

<script>

const ctx = document.getElementById('admissionChart');

if(ctx){

new Chart(ctx,{

type:'line',

data:{

labels:['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],

datasets:[

{
label:'Applications',
data:[100,140,160,155,185,180,205,200,182,202,218,228],
borderColor:'#2563eb',
backgroundColor:'transparent',
tension:.4
},

{
label:'Admitted',
data:[65,92,96,108,128,117,138,140,128,145,160,172],
borderColor:'#22c55e',
backgroundColor:'transparent',
tension:.4
},

{
label:'Enrolled',
data:[30,52,60,64,82,70,86,92,74,88,110,123],
borderColor:'#8b5cf6',
backgroundColor:'transparent',
tension:.4
}

]

},

options:{

responsive:true,
maintainAspectRatio:false

}

});

}

</script>


@endsection