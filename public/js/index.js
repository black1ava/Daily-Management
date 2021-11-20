window.onload = function(){
  // dropdown
  const dropdowns = document.getElementsByClassName('dropdown');
  Array.prototype.forEach.call(dropdowns, function(dropdown){
    dropdown.addEventListener('click', function(){
      dropdown.classList.toggle('active');
    });
  });

  // sidebar
  const sidebarToggles = document.getElementsByClassName('sidebar-toggle');

  Array.prototype.forEach.call(sidebarToggles, function(toggle){
    const id = toggle.getAttribute('toggle-for');
    const sidebar = document.getElementById(id);

    const darkScreen = document.createElement('div');
    darkScreen.setAttribute('class', 'dark-screen');
    sidebar.parentNode.insertBefore(darkScreen, darkScreen.nextSibling);

    function setElementsActive(){
      sidebar.classList.toggle('active');
      darkScreen.classList.toggle('active');
    }

    toggle.addEventListener('click', function(){
      setElementsActive();
    });

    darkScreen.addEventListener('click', function(){
      setElementsActive();
    });
  });

  //tabs
  const tabLinks = document.getElementsByClassName('tab-link');
  Array.prototype.forEach.call(tabLinks, function(tabLink){

    tabLink.addEventListener('click', function(){
      tabLink.setAttribute('class', 'tab-link active');

      const id = tabLink.getAttribute('content-id');
      const content = document.getElementById(id);
      content.setAttribute('class', 'tab-content active');

      const otherTabLinks = Array.prototype.filter.call(tabLinks, function(link){
        return link !== tabLink;
      });

      otherTabLinks.forEach(function(link){
        link.setAttribute('class', 'tab-link');
        const id = link.getAttribute('content-id');
        const content = document.getElementById(id);
        content.setAttribute('class', 'tab-content');
      });
    });
  });
}
