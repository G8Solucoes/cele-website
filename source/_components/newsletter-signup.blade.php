<div class="flex justify-center p-6 md:px-12 text-sm bg-primary-color-700">
    <!-- Begin Mailchimp Signup Form -->
    <div>
        <form action="https://your-mail-chimp-list-manage-url" method="post" name="mc-embedded-subscribe-form" class="grid grid-cols-3 gap-4 items-center" target="_blank" novalidate>
            <h3 class="text-white m-0">Assine nossa newsletter</h3>
            
            <div>
                <div class="hidden">
                    <div class="response" id="mce-error-response"></div>
                    <div class="response" id="mce-success-response"></div>
                </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->

                <div class="hidden" aria-hidden="true">
                    <input type="text" name="b_25582686a9fc051afd5453557_189578c854" tabindex="-1" value="">
                </div>

                <div class="flex">
                    <input type="email" name="EMAIL" placeholder="Email address" class="p-3 border-none rounded-l">

                    <button type="submit" name="subscribe" class="bg-blue-500 text-white p-3 rounded-r">Inscreva-se</button>
                </div>
            </div>

            <div class="flex">
                <a href="http://">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1 p-1 m-1 bg-white text-gray-800 box-content rounded">
                        <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path>
                    </svg>
                </a>

                <a href="http://">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1 p-1 m-1 bg-white text-gray-800 box-content rounded">
                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                    </svg>
                </a>

                <a href="http://">
                    <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1 p-1 m-1 bg-white text-gray-800 box-content rounded">
                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                        <rect x="2" y="9" width="4" height="12"></rect>
                        <circle cx="4" cy="4" r="2"></circle>
                    </svg>
                </a>
            </div>
        </form>
    </div>
    <!--End Mailchimp Signup Form -->
</div>

@push('scripts')
    <script src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script>
    <script>(function($) {
        window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';}(jQuery));var $mcj = jQuery.noConflict(true);
    </script>
@endpush
