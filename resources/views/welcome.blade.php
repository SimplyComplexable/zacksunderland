@extends('layouts/default')

@section('header')
    <div>
        <h1>Zack Sunderland</h1>
    </div>
    <div>
        <h2>Full Stack Software Developer</h2>
    </div>
@stop

@section('sidebar')
    <div class="about">
        <h3>About Me</h3>
        <ul>
            <li><a href="#bio" data-name="2">Bio</a></li>
            <li><a href="#education" data-name="3">Education</a></li>
            <li><a href="#experience" data-name="4">Experience</a></li>
        </ul>
    </div>

    <div class="contact">
        <h3>Find Me</h3>
        <ul>
            <li><a href="https://www.linkedin.com/in/zack-sunderland-4909aa14/" target="_blank">LinkedIn</a></li>
            <li><a href="https://github.com/SimplyComplexable" target="_blank">Github</a></li>
            <li><a href="mailto:ZackMSunderland@gmail.com">Contact</a></li>
        </ul>
    </div>
@stop

@section('content')
    <div class="page" id="banner">
        <img src="{{'img/fun_me_cropped.jpg'}}" class="banner-img">
    </div>
    <div class="page" id="bio">
        <h1>Mini Bio</h1>
        <p>
            A developer by heart, I look for complex and new problems to solve everyday both professionally and personally.
            My ideal job and ideal project is one that engages me and forces me to learn new concepts, while collaborating
            with other like-minded developers, with the ultimate goal of doing something never done, growing as a software
            developer, and obviously having fun doing it. I am a strong believer in a work environment that encourages
            self-control and responsibility by offering developers the freedom to work in the ways that are most effective
            for them. I also recognize the overwhelming importance of respect and appreciation among coworkers and
            employeer/employees, which in my experience, can be just as, if not more, important of a work experience than
            traditional benefits and even the competitiveness of a salary.
            <br>
            My primary experience is in web development, but I am really interested in all forms of development, and am
            particularly interested in mobile development in my free time. Aside from the working, I try to spend my time
            outside, as a desperate attempt to offset the hours spent behind a monitor. Snowboarding, hiking, golfing,
            swimming, riding my motorcyle (Honda Shadow Phantom) are a few of my favorite activities, but I'm interested
            in everything that gets me outside and active.
            <br>
            If you have a project or employment opportunity that fits this brief description and the experience listed
            below, please feel free to contact me using the link on the left.
        </p>
    </div>
    <div class="page" id="education">
        <h1>Education and Accomplishments</h1>
        <p>
            <h4>Weber State University | Ogden, UT</h4>
            <b>August 2017 — Bachelors of Science, Computer Science</b>
            <br>
            Learned a broad range of development skills from basic to complex and everything in between. Gained familiarity
            with a wide range of languages including Java, C++, C#/.NET, Python, Javascript, HTML5, CSS3 and SQL
            (MS, Oracle and MySQL). Developed a thorough understanding of the SDLC and the various methodologies used to
            in software development with specific focus on the Agile/Scrum method. Continually worked on projects utilizing
            core development concepts such as OOP, efficient data structures and algorithms, team collaboration an integration.
            Perhaps most-importantly, learned the abundant importance of good planning, design, and structure within a
            codebase, including effective commenting and functional code breakdown.

            <br><br>

            <b>December 2010 — Associates Degree, General Studies</b>
            <br>
            Improved reading and writing skills. Learned effective and professional communication within a group setting
            through both direct and electronic communication such as emails, video calls and text messages. Gained
            tremendous personal insight into a good work ethic and life managements skills. Learned a lot about a lot of
            subjects, most of which I've forgotten. I can play a mean game of billiards though.
            <br>
            I attended my first two years of college while still in high school as the dates suggest. I also received my
            Associate's degree prior to graduating high school, and, as far as I'm aware, was the first person to do so
            at the school.

            <br><br>

            <h5>Related Accomplishments</h5>
            <ul>
                <li>High Honor Roll (2 Semesters)</li>
                <li>Early College</li>
            </ul>

            <hr>

            <h4>NUAMES | Layton, UT</h4>
            <b>2011 — High School Diploma</b>

            <br><br>

            <h5>Related Accomplishments</h5>
            <ul>
                <li>Early College</li>
                <li>Technology Student Association (TSA)</li>
                <li>Academic Decathlon</li>
            </ul>
        </p>
    </div>
    <div class="page" id="experience">
        <h1>Work Experience</h1>
        <p>
            <h4>Ad-ventures Inc.</h4>
            <b>Lead Developer | December 2015 - February 2017</b>
            <br>
            Full-stack web development  utilizing the standard HTML5, CSS3, Javascript (with JQuery and many other open
            source libraries) set for front end and the CakePHP framework for server side. Managed entire design process,
            from a rough concept provided by a business owner to deployment into production setting. Maintained entire
            web application codebase including all new development, design improvements, maintenance, testing, and deployment.
            <br>
            Assisted in the management of other development teams, including work with an offshore development team.
            Managed remote servers through Amazon Web Services (AWS) using the EC2, RDS and Elastic Beanstalk tools for
            hosting and deployment. Maintained and improved schema on a MySQL database using the RDS service.
            <br>
            Designed and developed a RESTful API for the mobile counterparts to the web application. Collaborated with
            mobile development team to improve existing API process and increase overall speed and usability of the
            mobile apps.

            <hr>

            <h4>Sentinel Field Services</h4>
            <b>IT Specialist | April 2014 - February 2015 </b>
            <br>
            Managed IT needs for office of between 38 and 100 employees including Spiceworks Helpdesk support, MS Server 2008,
            NEC Phone System implementing Automatic Call Distribution (ACD), Exchange Server/ MS Office 365, and network
            administration. Implemented MS Office 365, including O365 Exchange Server and SharePoint 2013. Assisted in the
            development and maintenance of multiple PHP and MySQL based websites. Developed industry-specific software to
            increase the efficiency of processes using C# and MySQL.
            <br>
            Worked directly with executives to address daily technology needs and advance the technological state of the
            company. Developed procedures and documentation for the IT department. Evaluated third-party software/web-based
            solutions for internal needs and provided IT and end-user based recommendations regarding the evaluations.
            Coordinated integration between internal and client systems. Consistently initiated the reduction of department
            costs based on needs evaluation and market analysis.

            <br><br>

            <b>Swing Shift Supervisor | April 2012 - April 2014</b>
            <br>
            Managed team of between 5 and 10 employees both with and without direct supervision. Developed processes and
            tools to improve the efficiency of the team and increase the evaluation capabilities for higher management.
            Performed weekly and annual evaluations of all employees used to determine promotions, raises in the case of
            good performance, and terminations in the case of poor performance.

            <br><br>

            <b>Quality Control Specialist/Order Processor | October 2011 - April 2012</b>
            <br>
            Worked directly with clients and vendors to ensure all services were performed with excellent quality and
            timeliness. Managed work order assignment and review for a four state area, coordinating all rework items for
            nearly 1000 properties. Thoroughly researched and understood all company policies and procedures to ensure that
            all work was done as required, and provide accurate support to field vendors.
        </p>
    </div>
@stop

@section('script')
<script>
    $(document).ready(function() {
        //different scrollify options based on screen size
        const scroll_opts = [
            {
                section: '.page',
                offset: -150,
                scrollbars: false,
                setHeights: false
            },
            {
                section: '.page',
                offset: 0,
                scrollbars: false,
                setHeights: false
            }
        ];

        //initialize scrollify based on document width
        if (document.body.clientWidth > 600) {
            $.scrollify(scroll_opts[0]);
        } else {
            $.scrollify(scroll_opts[1]);
        }

        //override default linking to use scrollify move method
        $('.about a').click(function (e) {
            e.preventDefault();
            $.scrollify.move('#' + $(this).attr('data-name'));
        });

        //prevent excessive processing on resize $(window).resize(function() {
        $(window).resize(function () {
            if (this.resizeTO) clearTimeout(this.resizeTO);
            this.resizeTO = setTimeout(function () {
                $(this).trigger('resizeEnd');
            }, 500);
        });

        $(window).bind('resizeEnd', function () {
            if (document.body.clientWidth > 600) {
                $.scrollify.setOptions(scroll_opts[0]);
            } else {
                $.scrollify.setOptions(scroll_opts[1]);
            }
        });
    });
</script>
@stop