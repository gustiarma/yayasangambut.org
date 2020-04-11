<div class="container">
    <header itemscope itemtype="https://schema.org/Organization">
        <meta itemprop="name" content="{{ Settings::opt('organizationName','OrganizationName') }}">
        <meta itemprop="telephone" content="{{ Settings::opt('organizationPhone','08123456789') }}">
        <meta itemprop="sameAs"
            content="{{ Settings::opt('organizationFacebook','https://twitter.com/organizationFacebook') }}">
        <meta itemprop="sameAs"
            content="{{ Settings::opt('organizationInstagram','https://twitter.com/organizationInstagram') }}">
        <meta itemprop="sameAs"
            content="{{ Settings::opt('organizationTwitter','https://twitter.com/organizationTwitter') }}">
        <div id="header">
            <div class="headerimage">
                <a itemprop="url" href="{{ url()->to('/') }}" title="Beranda" rel="home" id="logo">
                    <img src="/images/SAMPLELOGO.png" alt="Beranda">
                </a>
                <div>

                </div>

            </div>
        </div>

    </header>

</div>
