const init = async () => {
  const posts = await fetchPosts();
  console.log(posts);
  insertPostElements(posts);
};

const fetchPosts = () => {
  const url = 'https://cms.haromstudio.hu/m0ponyva/wp-json/wp/v2/posts';
  return fetch(url).then((res) => res.json());
};

const insertPostElements = (posts) => {
  const postSection = document.getElementById('posts');
  posts.forEach((post) => {
    postSection.insertAdjacentHTML(
      'beforeend',
      '<div class="w-full md:w-1/2 lg:w-1/3 px-4">' +
        '<div class="mb-10 group wow fadeInUp" data-wow-delay=".1s">' +
        '<div class="rounded overflow-hidden mb-8">' +
        '<a href="blog-details.html" class="block">' +
        ' <img' +
        ` src="${post.guid.rendered}"` +
        ' alt="image"' +
        'class="w-full transition group-hover:scale-125 group-hover:rotate-6"' +
        ' />' +
        '  </a>' +
        '  </div>' +
        ' <div>' +
        ' <span class="bg-primary rounded inline-block text-center py-1 px-4 text-xs leading-loose font-semibold text-white mb-5">' +
        ' M0 Ponyva' +
        ' </span>' +
        '  <h3>' +
        ' <a' +
        '    href="blog-details.html"' +
        '    class="font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary"' +
        '>' +
        `  ${post.title.rendered}` +
        '  </a>' +
        ' </h3>' +
        '  <p class="text-base text-body-color">' +
        ` ${post.content.rendered}` +
        '   </p>' +
        ' </div>' +
        '  </div>' +
        '</div>'
    );
  });
};

init();
