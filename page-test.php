
<?php 
  get_header();
?>

<body data-spy="scroll" data-target=".dots" data-offset="150" class="navigation-test" id="home">

<div class="main-wrapper">

<header id="hero">
    <div id="logo"><img src="<?php echo get_template_directory_uri() ?>/images/assets/logo.svg" alt="People Strategies"></div>
</header>

<div id="menu-icon">
    <span></span>
</div>

<nav class="dots">
    <div class="wrapper">
        <ul class="nav">
            <li class="active">
                <a href="#welcome"><span>What's New</span></a>
            </li>
            <li class="">
                <a href="#projects"><span>Spotlighted Projects</span></a>
            </li>
            <li class="">
                <a href="#processupdates"><span>Process Updates</span></a>
            </li>
            <li class="">
                <a href="#transformation"><span>IT Transformation Updates</span></a>
            </li>
            <li class="">
                <a href="#shoutouts"><span>Shout Outs</span></a>
            </li>
            <li class="">
                <a href="#events"><span>Upcoming Events</span></a>
            </li>
        </ul>
    </div>
</nav>


<nav id="left">

    <a id="logo" href="index.htm">
        <h1>IT Newsletter</h1>
        <!-- <h2>#WeAreIT</h2> -->
    </a>

    <ul>
        <li id="curr-month" onclick="window.location='april.htm'">
            <h2>April 2016</h2>
        </li>
        <li onclick="window.location='march.htm'">
            <h2>March 2016</h2>
        </li>
        <li onclick="window.location='february.htm'">
            <h2>February 2016</h2>
        </li>
        <li onclick="window.location='january.htm'">
            <h2>January 2016</h2>
        </li>
        <li onclick="window.location='december.htm'">
            <h2>December 2015</h2>
        </li>
        <li onclick="window.location='november.htm'">
            <h2>November 2015</h2>
        </li>
        <li onclick="window.location='october.htm'">
            <h2>October 2015</h2>
        </li>
        <li onclick="window.location='september.htm'">
            <h2>September 2015</h2>
        </li>
        <li onclick="window.location='august.htm'">
            <h2>August 2015</h2>
        </li>
        <li onclick="window.location='july.htm'">
            <h2>July 2015</h2>
        </li>
    </ul>
</nav>

<div class="wrapper">
                
    <section id="welcome">
        <div class="section">
            <h1>What's New</h1>
            <h2>IT Portal SharePoint </h2>
            <ul>
                <li><p><a href="http://teams/sites/Enterprise-Services/SitePages/New%20Member%20Onboarding.aspx">TFS Weekly Reporting Workflow and Performance Metrics</a> – This manual, which resides in the IT TFS Time Entry and Accuracy Goals folder of the All repository on the IT Portal, describes the reporting workflow involved with the weekly TFS time entry. It also defines the associated metrics as they will be applied for each employee and manager’s annual performance evaluation.</p></li> 

                <li><p><a href="http://teams/sites/Enterprise-Services/Enterprise Services Document Repository/all/it project materials/tfs pid list.xlsx">TFS PID List</a> – This link under IT Information on the IT Portal home page opens the IT Projects PID List Excel workbook.</p></li>

                <li><p><a href="http://teams/sites/Enterprise-Services/Company Guides and Policies/Everything About WandB Companies FINAL IOE HANDOUT V37615.pdf">Company Overview</a> – This link under Our Company on the IT Portal home page opens a PowerPoint slide presentation that is an overview of The Word & Brown Companies.</p></li>

                <li><p><a href="http://teams/sites/Enterprise-Services/Lists/IT Contacts/AllItems.aspx">IT Contacts</a> – This list is now the only place in the company that completely and accurately lists all of the FTEs and contractors in the IT Department. It is being maintained weekly by way of official company documents.</p></li>

                <li><p><a href="http://teams/sites/Enterprise-Services/Enterprise Services Document Repository/All/Requesting an IT Technical Writer Resource">Requesting an IT Technical Writer Resource</a> – This link under How To on the IT Portal home page opens a brief PDF document that describes how to request the services of an IT technical writer resource.</p></li>

                <li><p><a href="http://teams/sites/Enterprise-Services/Enterprise Services Document Repository/All/IT Department Glossary of Acronyms and Terms/IT Glossary of Terms and Acronyms.pdf">Glossary of Terms and Acronyms</a> – This glossary has been completely rewritten to contain only terms and acronyms that are likely to be encountered in the IT Department. In addition to spelling out the acronyms, each entry now also includes a brief definition.</p></li>

                <li><p><a href="http://teams/sites/Enterprise-Services/SitePages/New Member Onboarding.aspx">New Member Onboarding</a> – This link under IT Information on the IT Portal home page opens the IT New Member Onboarding page. Besides organizational and administrative information for the IT Department, this SharePoint page (and its subsidiary pages) includes summaries of the IT Portal document repositories, IT-specific software, and hotlinks to IT How To guides and other relevant onboarding documents.</p></li>
            </ul>
            <h2>New TFS Report Center</h2>
            <p>Introducing the new TFS Report Center, an easy to use tool that will allow everyone to easily monitor, audit, and report TFS time entries. Some of the highlighted features are list below:</p>
            <ul>
                <li><p><strong>User Recognition:</strong> The system automatically identifies the logged in user and immediately displays your individual hours.</p></li>
                <li><p><strong>Default View:</strong> The default view displays your hours from this week, last week, your average weekly hours and the Month End Close date.</p></li>
                <li><p><strong>Date Options:</strong> Allows you to view hours by week, month and by custom date range.</p></li>
                <li><p><strong>Team View:</strong> This feature is specifically designed for Managers, Project Managers, Scrum Masters and above to view hours for their team members. All managers will automatically see their employees on the list. Project Managers and Scrum Masters can build their team view by adding and removing team members.</p></li>
                <li><p><strong>Excel Export:</strong> All users can export information to an excel sheet by clicking on the Excel icon.</p></li>
                <li><p><strong>Project View:</strong> In the Project hours view, Project Managers can view all the hours booked to their PIDs.</p></li>

            </ul>

        </div>
    </section>

    <section id="projects">
        <div class="section">
            <h1>Spotlighted Projects</h1>
            <h2>Choice Administrators</h2>
            <ul>
                <li><p>12/1/2015 New Carrier Sutter Health Plus was completed. This project added 12 new plans to the system.</p></li>
                <li><p>Nearly a dozen new Regulatory Letters were implemented.</p></li>
                <li><p>1/1/2016 Quarterly Changes for Cal Choice 51+ were completed.</p></li>
                <li><p>1/1/2016 Quarterly Changes for Cal Choice will be rolled to production soon. This change involved 4 new plans, and 11 plan rolls.
                <li><p>The Choice EDMS DEV team is close to completing the Pegasus integration of three top Cal Choice forms for business to receive as a fillable document, from Web or hand written forms. These forms will be imported it into the HP Autonomy Workflow PA software and with real-time Pegasus look ups to validate the business rules for enrollment, changes and termination of employees. Once we go live this will eliminate a lot of manual processes for the Choice Member Processing Center team.</p></li>
            </ul>

            <h2>GA</h2>
                <p>Team Orion has deployed major changes to the rating engine to supply the Quot-O-Matic website with rates and benefits for Phase 2 of the Ancillary project, Vision and Life. With the Ancillary project, Orion is expanding functionality by servicing the Ancillary requests and responses in JSON format with RESTful web services. The team is progressing with the development of the next project, Broker Instant Access. Further strengthening the integration of Orion with Quot-O-Matic, Orion will instantly grant quoting access to the Broker registering on the website.</p>

            <h2>Enterprise Services</h2>
            <ul>
                <li><p>Enterprise Services is still working diligently on the Choice EDMS project. Our next milestone date is 10/23 to have the remaining 7 of Choice’s top 10 forms converted to data capture ready fillable PDF, as well to be able integrate the data directly to Pegasus from their top 3 forms via Autonomy workflow. We are on track to meet the date!</p></li>
                <li><p>The TFS Report Center will be deployed to production on 3/22. With this deployment some bugs have been resolved and the application will be launched to all of IT. This application makes it very easy to track individual, team and project hours and generate reports quickly. Also with this deployment, the hours entered in TFS will be updated much faster on the TFS Report Center compared to any applications we have currently.</p></li>

                <li><p>The Timesheet plugin enhancement in TFS is being re-developed to support the TFS weekly reporting workflow and performance metrics. This enhancement will make it easier to enter hours while helping users to be more accurate with PID, Category and Activity selections. The implementation of this enhancement will also help the reporting team lock-out time entries at regular intervals which will significantly improve the consistency and accuracy of the reported hours.</p></li>
            </ul>
            <h2>IT Operations</h2>
                <p>The new phone switch has been deployed to the Orange campus and all of the remote offices. User feedback has been very positive with the new features users have on the phones. IT Ops will continue to work with the vendors to centralize all toll free and direct dial numbers to reduce the overall telecom expense.</p>
        </div>
    </section>

    <section id="processupdates">
        <div class="section">
            <h1>Process Updates</h1>
            <h2>TFS Updates</h2>
                <p>The Financial Discipline team is happy to report that all IT teams are now using the standardized User Story and Task Workflows in TFS.</p>

                <p>Next Steps: Standardizing the GUI template for User Stories, Tasks, and Bugs.</p>

            <h2>Contractor Timesheets</h2>

                <p>Effective immediately, all contractors are required to export a weekly report from the new TFS Report Center to use as their timesheet for manager sign off. Managers are required to review the report for accuracy prior to signing. All vendors have been notified that we will no longer be using their timesheets internally.</p>

            <h2>PID Number Reminder</h2>

                <p>Please be reminded of following regarding PID numbers:</p>
            <ul>
                <li><p><strong>604ITD</strong> is an out of office non-billable PID for contractors only. Contractors should not be booking any general administrative time. All contractor tasks should be billed to a project or operational assignment.</p></li>
                <li><p><strong>603TD</strong> is for employees only to use for out of office and administrative tasks not tied to a specific body of work. Contractors should not book to this PID number for any reason.</p></li>
            </ul>
            <h2>Enterprise Services Solutions (ESS) Wiki</h2>

                <p>Announcing the Enterprise Services Solutions Development Wiki. The ESS Wiki is intended as a single resource where developers and administrators can document their solutions and share their knowledge within their team and across the division.  It was originally started to document the Choice EDMS project and the solution built in HP LiquidOffice so that IT Ops would be able to support the Business after go-live.  Since then other teams within IT have begun to use this open source wiki to document their solutions.  This not only provides an organic knowledge base, but also prevents a single source of failure where only one developer knows how a particular program or application works.</p>

        </div>

    </section>

    <section id="transformation">
        <div class="section">
            <h1>IT Transformation Updates</h1>
            <h2>New #WeAreIT Recognition Program</h2>
            <p>People Strategies is excited to present the new #WeAreIT Recognition Program. </p>

            <p>This program will give members of the Word & Brown IT team an opportunity to recognize their peers for performance, dedication, diligence, and other impactful contributions to the IT Department.  </p>

            <p>The program will run from 3/1/2016-10/1/2016 (Note: This is applicable to Full Time Employees only).</p>

            <p>This is how the program will function: </p>
            <i>
            <ul class="decimal">
                <li><p>If you want to recognize your peers for their hard work or the help they have provided to you or for any other reason, you can do any of the following:
                    <ul>
                        <li>Submit a request here.</li>
                        <li>Send an email to Veronica Flores, Belinda Flores or Valerie.</li>
                        <li>Visit Veronica, Belinda, Valerie, Thuy, Amy, Selene, Manisha, or Charlie and request one</li>
                    </ul>
                </p></li>
                <li><p>You will be asked for the following basic information: 
                    <ul>
                        <li>Full name of the person you want to recognize.</li>
                        <li>A very brief description of the reason (something like “[Insert Name Here] helped me to understand TFS functionality.” for example).</li>
                    </ul>
                </p></li>
                <li><p>You will be provided with a gold coin with your Peers’ First Name and Last Name Initials on it.</p></li>
                <li><p>You then give the gold coin to the peer you are recognizing.</p></li>
                <li><p>Once a person has received 3 gold coins, they can trade them in for a trophy of their choice by visiting Veronica, Belinda, or Valerie.</p></li>
                <li><p>Coins will be collected throughout the year, placed in a raffle bin, and winners will be drawn at our End-of-the-Program event in the Fall of 2016.</p></li>
            </i>
            </ul>
            <h2>IT Department 2016 Photo Contest</h2>
                <li><p>The People Strategies team has made its final selections in the 2016 Photo Contest and will be announcing the winners soon.</p></li>

            <h2>IT Department .Net Job Titles and Descriptions</h2>
                <li><p>The People Strategies Training team has normalized and standardized all IT department .Net developer job titles and descriptions.  Hiring managers within IT can now use these new titles and descriptions to specifically identify the types of .Net developer candidates they are seeking.</p></li>

                <li><p>The People Strategies Training team will continue to normalize and standardize job titles and descriptions for other IT roles.</p></li>

        </div>

    </section>

    <section id="shoutouts">
        <div class="section">
            <h1>Shout Outs</h1>
            <h3>Aaron Watts</h3>
            <p>Due to Aaron’s successful live presentation he delivered at the HP Engage 2015 last year, he was asked to speak again for an HP Webinar as a customer partner regarding real world uses cases. It was watched by over 100 attendees from all around the world.</p> 

            <p>This webinar explores the powerful capabilities of the HP TeleForm and HP LiquidOffice solutions, which allow you to leverage PDF, HTML and paper forms in a workflow. They provide both internal and external users the ability to enter data into a form and then capture the data and push it into a complex workflow. Learn how to take the data from a form (paper or electronic) or workflow event to keep the customer informed of important actions throughout the workflow.</p>

            <p><a href="http://www2.ibtalk.net/index.php?cmp=attendx_meeting&mt_number=64785230">Click to view the webinar.</a></p>

            <h2>Promotions</h2>

            <h3>Patrick Canavan<h3>
            <p>Patrick Canavan has been promoted to Vice President, Choice Administrators IT.  He reports to Allen Fazio, CIO.</p>

            <p>Joining Word & Brown in 2015 as a contractor focused on the modernization of Cal Choice, Patrick has quickly demonstrated his value to the organization.   He joined the IT team full time this past fall as Director of IT focused on Choice Administrators, and was thrust into the leadership role.</p>

            <p>During his career Patrick has held key roles both in New York City and internationally.  With a background in financial services, consulting, and project management, Patrick brings fresh thinking to the IT department.  As a member of the IT Executive Team he has an impact on every aspect of the IT organization and the growth of our capabilities. This year Patrick will lead his team as they focus on key strategic efforts such as CRM for the Cal Choice Call Center, On Line Renewals, Document and Process Automation, and Quarterly Changes.</p>

            <h3>Lee Dereschuk<h3>
            <p>Lee Dereschuk has been promoted to Senior Director of GA .Net Development.  He reports to Angela Moran, SVP of IT.  </p>

            <p>Lee has over 25 years of experience developing Internet-based applications in many industry verticals such as Financial Services and the Insurance Industry.  He has been at Word & Brown for a little over three years.</p>
  
            <p>Lee’s recent notable achievements resulting in significant business impact include: </p>
            <ul class="list">
                <li><p>Summary and Custom Quoting on the web</p></li>
                <li><p>Ancillary Quoting on the web</p></li>
                <li><p>Instant Broker Access</p></li>
                <li><p>Grand Mothering on the web</p></li>
                <li><p>Translated Worksheets</p></li>
            </ul>

            <h3>Tom Sales<h3>
            <p>Tom Sales has been promoted to Manager, Software Development Choice Administrators.  He reports to Patrick Canavan, Vice President, Choice Administrators IT.  </p>

            <p>As a result of Tom’s promotion, he will continue his ownership of the design, delivery and maintenance of all Choice Administrator platforms. As the leader of the development organization, his responsibilities will include all aspects of governance driving how Choice–IT maintains the platform supporting the business organization and its customers.  Tom will be a key component in how we manage our customer expectations with regards to our IT products and services via supporting Patrick Canavan in liaising with our business stakeholders.  Tom’s tenure at Word & Brown, starting in October of 2004, contains a significant track record of successfully driving IT delivery at Choice. This promotion formalizes and recognizes his contribution to that success.</p>

            <h3>Alan Siders<h3>
            <p>Alan Siders has been promoted to Sr. Supervisor, Software Development.  He reports to Tom Sales, Manager, Software Development Choice Administrators.  </p>

            <p>Alan started with Word & Brown in January of 2002.  He played a key role in the migration of our electronic publishing tool from Miramo to HP Exstream.  Alan also stepped up his involvement in the Quarterly Changes projects, and now reports the team’s status to business in weekly meetings.</p>

            <h3>Todd Swancoat<h3>
            <p>Todd Swancoat has been promoted to Manager, Software Development.  He reports to Tom Sales, Manager, Software Development Choice Administrators.  </p>

            <p>Todd has been with Word & Brown since March of 2001.  He manages all the development for the Choice Administrator websites.  Some of the key deployments for the Web are as follows:</p>
            <ul class="list">
                <li><p>Online Enrollment (OLE) – The Choice Administrator OLE system enables groups to enroll through a website for faster approval.</p></li>
                <li><p>Automated Choice Profiler –- This system helps customer company employees select the best plans for themselves and their families.</p></li>
                <li><p>Choice MS 2003 End-of-Service – Upgrading the website servers.</p></li>
            </ul>

            <h3>Eric Soraya<h3>
            <p>Eric Soraya has been promoted to Sr. Software Engineer I.  He reports to Alan Siders, Sr. Supervisor, Software Development.</p> 

            <p>Eric joined Word & Brown in December of 2012 as a developer with graphical user interface (GUI) expertise.  He helped fill the gap on Quarterly Changes projects when members of the team were reassigned to the EDMS project.  Eric is the go-to person for our Rep Reassignment, Broker Block Changes, and Renewal Territory Splits projects.</p>

            <h3>Roger Enes<h3>
            <p>Roger Enes has been promoted to System Administrator II.  He reports to Warren Sanderson, Sr. Manager, Infrastructure & Systems. v

            <p>Roger is a major contributor on the Enterprise Infrastructure Team and has become a key player in the following roles this past year:</p>
            <ul class="list">
                <li><p>SME for System Center Configuration Manager (SCCM) – We are now able to roll out desktop images and patches as well check the environment for compliance issues. SCCM allows us to manage these devices as a whole, not individually as we did in the past.</p></li>
                <li><p>Secondary SME for VMware Administration.</p></li>
                <li><p>Secondary SME for Networker Backup Administration.</p></li>
                <li><p>Proficient in the scripting language PowerShell, which is used to manage most Microsoft environments.</p></li>
            </ul>    

            <h3>Mark Gunderson<h3>
            <p>Mark Gunderson has been promoted to Service Desk Engineer.  He reports to Robert LaFavor, Manager, Service Desk & Telecom. </p> 

            <p>Mark is a valuable member of the Service Desk Team.  Consider the following accomplishments:</p>
            <ul class="list">
                <li><p>He’s expert in our ITIL-based Service Management tool (FootPrints), which provides an enhanced environment for tracking requests and managing Change Control.</p></li>
                <li><p>He’s created numerous custom tools, through the use of PowerShell, to simplify many of the processes performed by the Operations team.</p></li>
                <li><p>He was the lead tech responsible for deploying Trend Micro Antivirus to the organization, and remains the go-to person for the support and maintenance of the platform.</p></li>
            </ul>
            <p>Using SCCM he’s collected hardware and software information for every asset in the organization and produced reports that are used to validate licensing and deployments.</p>

            <h3>Lexter Calhoun<h3>
            <p>We are pleased to announce that Lexter Calhoun has been promoted to Senior Supervisor of IT Enterprise Services. Lexter joined Word & Brown in 2014 and brought with him 20 years of industry experience. Prior to joining our family, he worked at Volt Information Sciences as a Project Manager dedicated to system integration projects.</p>

            <p>Lexter has brought tremendous value to the IT division by applying his strong leadership skills and unrelenting determination towards producing results. During his time with Word & Brown, he has successfully implemented several business solutions and streamlined processes across the IT enterprise resulting in increased efficiencies and reduction in cost. Lexter continues to progress our standardization efforts across divisions and we look forward to our team’s ongoing advancement.</p>

            <p>Please join us in congratulating Lexter on his well-deserved promotion.</p>

            <h2>New Team Members</h2>

            <h3>Walter Manalu</h3>
            <p>The IT Department welcomes back Walter Manalu as manager of the Enterprise Services User Interface/User Experience (UI/UX) team.  He is returning to IT after serving the past ? years as ? in the Word & Brown Marketing department.</p>

            <p>Welcome back to IT Walter!</p>

            <h3>Howard Feiden</h3>       
            <p>The IT Department welcomes back Howard Feiden as a Sr. .Net Software Engineer. He joins the Pick Web Dev team under Todd Swancoat.</p>

            <p>Howard had worked for us previously for 10 years starting in 2000. He recently heard that IT needed developers and decided to contact us. Most recently he was doing .Net Web developer contract work for various companies. Howard was born and raised in Queens, New York. He attended American University in Washington, D.C. and Coleman College in La Mirada, CA. </p>

            <p>In his spare time, Howard enjoys improving his handyman skills by fixing things around the house. </p>

            <p>Welcome back to the Word & Brown family Howard!  </p>

            <h3>Lenny Garcia</h3>
            <p>Lenny Garcia joins IT as a Sr. Network Administrator on the IT Operations Network team under Brett Harper. Previously he worked at On Target Voice & Data, a Cisco Partner.  He heard about us through LinkedIn. Lenny is originally from Los Angeles, but grew up very nomadically from the Midwest to the West Coast, mostly in California. He enjoys learning about new innovative technology in all realms of technology and how it works. He likes to read about Nicola Tesla and how he revolutionized electricity. He also likes to study the inner workings of robotics and how software is able to control hardware and make robots do the things they do. </p>

            <p>Aside from technology, Lenny loves to spend time with his baby girl and his wife. </p>

            <p>Welcome to Word & Brown, Lenny!</p>

            <h2>Employee of the Month</h2>

            <h3>David Brown</h3> 
            <p>(nominated by Tom Majchrowski)</p>
            <p>David has been involved in almost everything in the Product Division supporting open enrollment.  Some of the items he has driven or supported are:</p>
            <ul class="list">
                <li><p>Working with Phyllis Beam to import the SERFF and PUFF data in a long overnight marathon..</p></li>
                <li><p>Multiple deployments per week..</p></li>
                <li><p>Building and rebuilding new lower environments..</p></li>
                <li><p>Troubleshooting issues as they arise..</p></li>
            </ul>
            <p>Congratulations David!</p>

            <h3>Submitting Nominations</h3>
            <p>Please remember to nominate anyone you believe deserves the “IT Employee of the Month” award. Under this program, one IT employee is recognized each month for their hard work and dedication towards Service of Unequalled Excellence. This is a peer-nominated award and any IT employee can submit a nomination using the online form on SharePoint. The “Employee of the Month” receives a $25 gift card! In addition, the winner of the IT Employee of the Month is automatically eligible for a company-wide SOUE award, if qualified under SOUE rules.</p>

            <p>New Employee of the Month Rewards:</p>
            <ul class="list">
                <li><p>The winner gets ONE WEEK OF CASUAL DRESS!</p></li>
                <li><p>Every 3-4 months the winners are invited to lunch with Allen and the IT Vice Presidents.</p></li>
            </ul>
            <p>New Employee of the Month Submission Deadline:</p>
            <ul class="list">
                <li><p>The deadline to submit employee of the month nominations is the 23rd of each month.</p></li>
                <li><p>This allows us time to select the winner and be ready to announce by the 1st.</p></li>
            </ul>
            <h2>Individual Shout Outs</h2>

            <i><p>I would like to thank <strong>Kevin Williams</strong> for being so responsive and quickly helping one of our EDMS developers.  He had a great attitude and his promptness helped us to stay on our tight schedule.  We really appreciate him helping us so quickly and with a good attitude to boot.</p>

            <p>Way to go, Kevin!</p></i>
            <p>Thanks, Becky Meinhard</p>


            <i><p><strong>Selene Estribi</strong>,<br /> You have been an absolute Rock Star on this project.  Your quick understanding, attention to detail and follow through make you nothing but a pleasure to work with! </p></i>

            <p>Best regards, Scott R. MacKechnie</p>

        </div>

    </section>

    <section id="events">
        <div class="section">
            <h1>Upcoming Events</h1>

            <p><strong>IT Science Fair</strong> – Tuesday, April 26, from 11:00 am to 2:30 pm – 681 Building, 2nd floor.  Lunch will be provided.</p>

            <p>The six IT Transformation horizontal teams (Delivery Excellence, Elasticity, Financial Discipline, People Strategies, Analytical Decision Making, and Enterprise Architecture) will each have a booth at which they will report on their accomplishments during 2015 and their goals for 2016.  IT employees will rotate through the booths in groups of groups of 12-15 for presentations approximately 15 minutes in length.</p>

            <p>This event is for Word & Brown Full Time Employees only.</p>

            </ul>
        </div>

    </section>

</div>

<?php 
  get_footer();
?>