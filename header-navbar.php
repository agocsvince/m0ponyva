<nav id="navbarCollapse" class=" absolute py-5 lg:py-0 lg:px-4 xl:px-6 bg-white lg:bg-transparent shadow-lg rounded-lg max-w-[250px] w-full lg:max-w-full lg:w-full right-4 top-full hidden lg:block lg:static lg:shadow-none">		
    <ul class="blcok lg:flex">
        <li class="relative group">
            <a href="
                <?php if (is_home()) {
                    echo '#szolgaltatasok'
                else {
                    echo 'szolgaltatasok.html'
                } ?>"
                class=" ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                Szolgáltatásaink
            </a>
        </li>
        <li class="relative group">
            <a href="
                <?php if (is_home()) {
                    echo '#gyik'
                else {
                    echo 'rolunk.html'
                } ?>"
                class=" ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                Rólunk
            </a>
        </li>
        <li class="relative group">
            <a href="
                <?php if (is_home()) {
                    echo '#rolunk'
                else {
                    echo 'index.html#rolunk'
                } ?>"
                class=" ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                Ügyfeleink
            </a>
        </li>
        <li class="relative group">
            <a href="
                <?php if (is_home()) {
                    echo '#kapcsolat'
                else {
                    echo 'kapcsolat.html'
                } ?>"
                class=" ud-menu-scroll text-base text-dark lg:text-white lg:group-hover:opacity-70 lg:group-hover:text-white group-hover:text-primary py-2 lg:py-6 lg:inline-flex lg:px-0 flex mx-8 lg:mr-0 lg:ml-7 xl:ml-12">
                Kapcsolat
            </a>
        </li>
    </ul>
</nav>