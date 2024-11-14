@extends('layouts.master')
@section('content')
    @include('layouts.header')
    <div class="container">
        <section class="path" style="margin-top: 160px; margin-bottom: 50px">
            <p><a href="{{ route('home') }}">Home</a> <span><i class="bi bi-dot" style="color: gray"></i></span>Privacy Policy
            </p>
            <div class="privacy-title">
                <h1 class="mb-3">Privacy Policy</h1>
                <p>Last Updated: Feb 03, 2020</p>
            </div>
            <button class="form-button mb-3" id="download-btn"><i class="bi bi-download me-3"></i>Download</button>
            <div class="main-content row">
                <div class="col-8">
                    <div class="introduction mb-5">
                        <p><em>Ojimah.com (hereinafter, “United GB Sarl” or “We”) values its users and it is committed to
                                protect your privacy. In order to fulfill this commitment, Ojimah has developed this privacy
                                policy (hereinafter, the “Privacy Policy” or “Policy”) outlining Ojimah's practices
                                regardingthe collection, use, preservation and disclosure of personal information collected
                                in
                                accordance with applicable laws.</em></p>
                        <p><em>When You use Ojimah’s services, whether to make searches, sign in to receive offers and news,
                                or
                                purchase any service through any other of its sale channels, call center, website
                                (hereinafter,
                                the “Website”) or application for mobiles and tablets (hereinafter, the “Application”) you
                                trust
                                information to us. This Privacy Policy seeks to help you understand which data we collect,
                                why
                                we do it, and what we do with such data. <br>You, as a user, accept the practices detailed
                                below, so we recommend you to carefully read the information offered to you.</em></p>
                        <p><em>The person in charge of the data base/file is Ojimah.com, Inc., domiciled at Rua n4, Porta 3,
                                401
                                Bissau Velho, Bissau, Guinea-Bissau.</em></p>
                        <ol style="padding-left: 20px">
                            <li>What information do we collect?</li>
                            <li>What do we use the information collected for?</li>
                            <li>Who do we share the information collected with?</li>
                            <li>Where do we store and how do we protect the information collected?</li>
                            <li>How can the information collected be accessed, deleted, and/or updated?</li>
                            <li>How does Despegar interact with your social networks?</li>
                        </ol>
                    </div>
                    <div class="collect-info mb-5">
                        <h3 class="mb-3">1. What information do we collect?</h3>
                        <p>Ojimah receives and stores: a) Information given by You, b) information obtained from third
                            parties,
                            c) public information, and d) information collected by our systems, as described below.
                        </p>
                        <div class="collect-info-content">
                            <h4>Information given by You:</h4>
                            <p>In order to make tourism bookings at Ojimah, You must provide us with certain personal
                                information(hereinafter, the “Personal Information”), including first and last name,
                                identity card number or valid identification, nationality, tax identification number, and
                                contact information (such as phone number, address or email address). For the purpose of
                                making tourism bookings, You must also provide us with information of your debit or credit
                                card (such as credit card number, security code, card holder's name, and expiration date).
                                At its sole discretion, Ojimah may confirm the Personal Information furnished resorting to
                                public entities, specialized companies or risk centrals; therefore, we are expressly
                                authorized by You. The information obtained by Ojimah from these entities will be held on a
                                confidential basis.</p>
                            <p>You may always choose not to give us information, but, in general, certain information is
                                required from You to purchase or make transactions at Ojimah. If You choose not to give us
                                certain information, You may not be able to purchase from Us.</p>
                            <p>If You make a booking in the name of a third party, you shall previously obtain the consent
                                of such third party before providing us with his/her Personal Information. If such third
                                party is not of age, according to the applicable law, You represent to have the necessary
                                powers to provide such Personal Information and accept this Privacy Policy.</p>
                            <p>You may also give opinions, comments and suggestions by voluntarily participating in surveys
                                and/or questions sent by e-mail or from the Website or the Application (the “Opinions”). In
                                this
                                case, in order to give other users real testimonials on service experiences, You accept and
                                agree that all Opinions sent by you may be published in Ojimah’s Website and/or Application,
                                or in other Sites and/or Applications of vendors engaged with Ojimah. In such case, You can
                                do it by identifying yourself with your full name and/or surname, picture, comment and
                                nationality. Upon giving us your Opinion, or loading real pictures through the Website, You
                                irrevocably assign Ojimah any property rights on such pictures and Opinions. We remind you
                                that You can express your opinion on an anonymous basis or delete it, as detailed in the
                                procedure below in this Privacy Policy (item 6.1. Opt-out policy).</p>
                            <p class="mb-5">Always bear in mind that when you post information in a public area of this
                                Website (including, without limitation: ads, chat groups, electronic picture albums and
                                comments on products and services), you are making it available to other members, users of
                                the Website and the public in general, which is out of control of Ojimah. Please remember
                                the foregoing and be careful with the information you decide to disclose.</p>
                        </div>
                        <div class="collect-info-content">
                            <h4>Information given by third parties:</h4>
                            <p>As long as permitted by law, Ojimah may also obtain Personal Information about You and add it
                                to
                                the
                                Personal Information given by You, whether from affiliated entities, business partners, and
                                other
                                sources of independent third parties, such as public data bases, information collected
                                during a
                                phone conversation with the customer care center and/or through interactive applications.
                                Take
                                into
                                account that all information collected about You may be combined with your Personal
                                Information.
                            </p>
                            <p>Any Personal Information obtained by Ojimah by the means herein described will be treated
                                according
                                to the provisions of this Privacy Policy.</p>
                            <p>If You register in Ojimah through your personal account in a social network (“Personal
                                Account”),
                                you
                                expressly agree that Ojimah can:<br>Access, at any time, the whole information contained in
                                your
                                Personal Account, specially including, without limitation, your Personal Information,
                                information on
                                your interests, tastes, contacts and any other content kept in your Personal Account.</p>
                            <p>In such account, include messages, pictures, videos and any other type of content.</p>
                            <p class="mb-5">Send information or messages for the purpose described in article 3, “What do
                                we
                                use
                                the collected information for”, in this Policy, to the email of the User linked to the
                                Personal
                                Account or the email used to make bookings at Ojimah.</p>
                        </div>
                        <div class="collect-info-content">
                            <h4>Information collected by our systems. Cookies and web beacons policy.</h4>
                            <p>Ojimah automatically collects and stores certain information on the activity of its Users.
                                Such
                                information may include the source URL (whether they are or not at Ojimah’s Website), what
                                URL
                                they often access, what browser they are using and their IP addresses. Also visited pages
                                and
                                searches done.</p>
                            <p>In order for the Website to work correctly, Ojimah uses cookies of its own and from third
                                parties.</p>
                        </div>
                        <div class="collect-info-content">
                            <h4>What is a cookie? What are web beacons?</h4>
                            <p>Cookies are specific types of information transmitted by a website to the hard disk of the
                                User's computer for the purpose of keeping records. Cookies may be used to facilitate the
                                use of a website, by saving passwords and preferences while the User explores the Internet.
                            </p>
                            <p>On its part, “web beacons” are images inserted in an Internet page or email, which may be
                                used to monitor the behavior of a visitor, such as storing information on the user's IP
                                address, length of time of interaction in such page, and type of browser used, among others.
                            </p>
                        </div>

                        <div class="collect-info-content">
                            <h4>How are cookies controlled?</h4>
                            <p>Although most of browsers accept “cookies” and “web beacons” automatically, at all times, You
                                may choose not to receive a file of cookies by enabling your browser to reject cookies or
                                inform you before accepting them (for more information, check www.aboutcookies.org).</p>
                            <p>Bear in mind that cookies preferences must be set for each browser (Internet Explorer, Google
                                Chrome, Mozilla Firefox or Safari), and that, by rejecting cookies, you may not access many
                                travel services and planning tools offered by this Website.</p>
                        </div>
                        <div class="collect-info-content">
                            <h4>How do we use cookies?</h4>
                            <p>Our Website uses different types of cookies:<br>
                                Technical cookies:<br>
                                are used for the proper operation of the website.<br>
                                Functional cookies:<br>
                                are necessary to offer services requested by users of this website.<br>
                                Analytical cookies:<br>
                                allow to see the browsing behavior of visitors in the website, as well as registering the
                                content seen by them and of their interest. This helps us to improve the service offered,
                                since this way we can secure that our users find the information they are looking for.<br>
                                Social cookies:<br>
                                allow to provide functionalities related to social networks (Facebook, Google and Twitter)
                                by enabling and controlling the interaction with social widgets in the website.<br>
                                Associated cookies:<br>
                                enable to follow up visits coming from our affiliated websites.<br>
                                Publicity cookies:<br>
                                collect information on your preferences and choices in the website. They are aimed at
                                advertising networks, where are later used to show customized advertising in other
                                websites.<br>
                                Identification cookies:<br>
                                enable the identification of visitors and the definition of matches with personal data
                                included in our files, in order to send pertinent personal communications.<br>
                                Cookies are specific types of information transmitted by a website to the hard disk of the
                                User's computer for the purpose of keeping records. Cookies may be used to facilitate the
                                use of a website, by saving passwords and preferences while the User explores the
                                Internet.<br>
                            </p>
                        </div>
                    </div>
                    <div class="info-collected-usage mb-5">
                        <h3>2. What do we use the information collected for?</h3>
                        <p>You expressly authorize Ojimah to register and handle your Personal Information for these
                            purposes:</p>
                        <ul>
                            <li>To manage your tourism booking, complete transactions started by you, and process invoices
                                or other tax documentation;</li>
                            <li>To offer you products and services, and answer your questions and comments;</li>
                            <li>To send you confirmations and updates on your trip, as well as any relevant information in
                                such regard. This information may be sent via email, SMS, or Whatsapp to the mobile given by
                                You. These messages may contain (without limitation) information on Ojimah’s services, as
                                well as contact data of vendors that may help you with your trip experience at destination.
                            </li>
                            <li>To contact You for client service purposes, make surveys, statistics or analysis on
                                consumption habits or preferences, notify you by email special offers and products and
                                services related to trips that you may be interested in, except that you do not want to (see
                                “Opt-out” policy below).</li>
                        </ul>
                        <p>For the purpose of offering better services or providing its users with information related to
                            your preferences, Ojimah may also develop internal studies on interests, behaviors and
                            demography of users, to better understand their needs and interests, improve our business and
                            promotional initiatives, customize its contents, its presentation and services, show advertising
                            or promotions, banners of interest to our users.</p>
                        <p>Furthermore, Ojimah uses the information of debit or credit cards (such as the name of the card
                            holder, card number and expiration date) only for the purpose of completing the bookings made by
                            You, including sending your data to final vendors of services, in order to manage your bookings
                            and/or purchase orders. Furthermore, You may choose that Ojimah reminds certain data of your
                            card and billing, which will automatically appear upon entering Ojimah’s Website and/or
                            Application.</p>
                    </div>
                    <div class="info-sharing mb-5">
                        <h3>3. Who we share the information collected with?</h3>
                        <p>You give your unequivocal consent so that Ojimah can share the relevant Personal Information of
                            its users with vendors for managing its bookings and/or purchase orders, such as airlines,
                            hotels, tourism companies that render services at destination, vehicle rental companies,
                            wholesalers, and other vendors of products and services that may be hired by You through our
                            Website and/or Application. In addition, You accept to share your Personal Information with
                            vendors rendering services to Ojimah, including credit cards, business analytics, customer care
                            service, marketing and fraud prevention.</p>
                        <p>Ojimah may authorize service vendors to collect Personal information in your name, including, as
                            needed, to operate certain elements of our Website and/or our Application or to facilitate the
                            delivery of on-line advertising according to your interests. Besides, Ojimah may share Personal
                            Information with business partners, who we could jointly offer products or services with. Such
                            vendors and business partners are subject to strict non-disclosure agreements that prohibit the
                            unauthorized use or disclosure of Personal Information which they have access to. Ojimah may
                            also share your Personal Information for the purpose of complying with applicable rules and
                            cooperate with competent authorities.</p>
                        <p>Finally, Ojimah may also share your Personal Information with companies belonging to Ojimah.com
                            group. In the event of any transfer of personal data, the personal data recipient shall assume
                            the same obligations as the disclosing party.<br>Bear in mind that, if You furnish information
                            on a free and voluntary basis, on your own initiative, directly to service vendors (whether they
                            are service vendors in Ojimah or not), such service vendors shall collect, treat and keep this
                            information according to their own privacy policies. Ojimah is not liable for the undue use of
                            the Personal Information that may be done by third companies out of the website or the
                            application.</p>
                    </div>
                    <div class="info-storing mb-5">
                        <h3>4. Where do we store and how we protect the information collected?</h3>
                        <p>All Personal Information is collected and stored in servers physically located in the United
                            Kingdom. Ojimah may relocate these servers in any other country, in the future, and may store
                            Personal Information in the United Kingdom or in other countries, for back-up purposes. You
                            express you unequivocal consent so that Ojimah may transfer your data to any country worldwide.
                            In any case, Ojimah undertakes to secure the compliance of any legally enforceable standards for
                            the protection and safekeeping of your Personal Information, through the execution of agreements
                            whose purpose is the privacy of your personal data.<br>Personal Information shall be treated
                            with the degree of legally enforceable protection to secure its safety, and avoid its
                            alteration, loss, unauthorized treatment or access.</p>
                    </div>
                    <div class="info-accessibility mb-5">
                        <div class="info-accessibility-content">
                            <h4>5.1. Opt-out policy</h4>
                            <p>When You make transactions or register as user in Ojimah, you may choose to receive e-mail
                                promotions, messages or alerts on offers, as provided by applicable laws. In such regard, in
                                each message received you will have the chance to cancel your subscription. You may edit
                                your choices at any time, following any of the alternatives explained below (“Rights of
                                access, cancellation, rectification and objection of Personal Information”).</p>
                            <p>Bear in mind that the exercise of the opt-out right refers to e-mail promotions, messages or
                                alerts on offers. Therefore, You will continue receiving communications regarding the status
                                of your active bookings. In addition, in certain cases, Ojimah shall keep certain Personal
                                Information on file, for the purpose of solving disputes or claims, detecting problems or
                                issues and solve them, and comply with the provisions of the General Terms and Conditions
                                for a term set forth by law. In any case, the Personal Information of a user will not be
                                immediately deleted from our files for legal and technical reasons, including safety support
                                systems. Therefore, although Ojimah undertakes to endeavor its best efforts taking into
                                account the status of the technique, not every Personal Information may be finally
                                deleted.<br>In order to edit any information already furnished, please know that You can
                                enter the section “My Account” > “My Profile”.</p>
                            <p>Access, cancellation, rectification and objection rights of Personal Information.<br>Users,
                                holders of Personal Information, are entitled to exercise the rights to access, cancel and
                                update their Personal Information, as well as object to its treatment, and to be informed of
                                assignments carried out, on a gratuitous basis at intervals not lower than six months, save
                                that a lawful interest is evidenced to such effect.</p>
                        </div>
                        <div class="info-accessibility-content">
                            <h4>5.3. How to exercise the rights described above</h4>
                            <p>You may exercise them by any of the options below:</p>
                            <ul>
                                <li>By sending the respective request at the address specified above, or by sending it by
                                    e-mail to the address info@ojimah.com. In your request, you shall specify your full name
                                    and a document evidencing the legal representation of the holder, attach a simple copy
                                    of your identity card, specification of your email and postal address for notices, and a
                                    contact telephone number, and a clear and accurate description of personal data on which
                                    you intend to exercise the rights of access, rectification, and cancellation and
                                    documents supporting the change.</li>
                                <li>Once the requirements above are met, and provided that the request can be granted,
                                    Ojimah shall notify you if it has allowed or rejected the request.</li>
                                <li>Likewise, you can access, update, and correct your registration information at any time
                                    by accessing “My Profile” in “My Account” within Ojimah's Website. By accessing “Emails
                                    and Alerts” in “My Account”, you can choose what emails you wish to receive.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="ojimah-iteration mb-5">
                        <h3>6. How does Ojimah interact with your social networks?</h3>
                        <p>Upon registering in Ojimah, Ojimah requests to choose a user identification and a password (that
                            is to say, access a personal account within the Website). Likewise, Ojimah allows you to access
                            “My Account” through your Facebook account, Google+ or other social networks (hereafter, the
                            “Social Networks” or “Social Network”) that may match access to “My Account” in the future. As
                            part of the functionality of the Website, and in order to offer a better customized experience,
                            you may link your account to Social Networks in two ways:</p>
                        <ul>
                            <li>By giving your Social Network account sign in information through the Website and/or the
                                Application; or by enabling Ojimah to access your Social Network account, as permitted in
                                the applicable terms and conditions governing Your use of each Social Network. You represent
                                that you are entitled to disclose the sign-in information of your Social Network to Ojimah
                                and/or grant access to Ojimah to your account, without implying a default on your part of
                                any terms and conditions governing Your use of the corresponding Social Network, and Ojimah
                                not being liable for paying any rate or regarding any use limitation imposed by external
                                service vendors of the Social Network. By granting Ojimah access to any Social Network, You
                                understand that Ojimah will access, make available and store (if applicable) any contents
                                given by You and stored in your Social Network in order to be available in the Website
                                and/or Application, and by means of them, through your Social Network and profile page of
                                such account. Unless otherwise provided in these Terms, any Social Network content, if any,
                                shall be deemed user content to all effects of these Terms.</li>
                            <li>By virtue of the Social Networks chosen and subject to the privacy setup established in such
                                accounts, the personal identification information published in your Social Network will be
                                available in your Ojimah’s account, and through it, in the Website and/or Application. You
                                must take into account that, if a Social Network is no longer available, or if the external
                                service vendor blocks access by Ojimah to such Social Network, the Social Network content
                                will no longer be available in the Website and/or the Application or through them.</li>
                        </ul>
                    </div>
                    <p>BEAR IN MIND THAT YOUR RELATIONSHIP WITH EXTERNAL VENDORS OF ASSOCIATED SERVICES IS EXCLUSIVELY
                        GOVERNED BY ANY EXECUTED AGREEMENTS WITH SUCH EXTERNAL SERVICE VENDORS. Ojimah shall not endeavor
                        any effort to review the content of Social Network accounts for any reason, including, among others,
                        the accuracy, lawfulness or non-default, and does not take any liability for any of the Social
                        Network content. In such way, it is easier to customize our web page according to your preferences,
                        contact you with your friends to talk about destinations, and analyze and improve our traveling
                        services.</p>
                    <p>If You lose control of your account or access password to the Social Networks, you can lose control
                        of your Personal Information and may be subject to legally valid transactions done in your name.
                        Therefore, if for any reason your password is at risk, You must immediately: (i) change it, altering
                        your registration information furnished to this Website, and (ii) contact us through any channel
                        offered by Ojimah.</p>
                    <p>This Website may contain links to other websites that have their own privacy and confidentiality
                        policies. So we recommend that if You visit such other websites, carefully review their
                        confidentiality practices and policies, since this Privacy Policy does not cover third parties'
                        practices or policies, including those that may disclose and/or share information with Ojimah.</p>
                    <p>This Policy was amended and updated on January 4, 2021. Ojimah may make any changes to this Privacy
                        Policy in the future. Any alteration regarding how Ojimah uses the Personal Information shall be
                        reflected in future versions of this “Privacy Policy”, and shall be published in this page, so you
                        should review the Privacy Policy occasionally.</p>
                    <p>If you have questions about this Privacy Policy, Ojimah’s practices or your transactions at Ojimah’s
                        page www.Ojimah.com/aboutus please contact us in “My Account” or “My Booking”.</p>
                </div>
            </div>
        </section>
    </div>
    @include('layouts.footer')
@endsection
