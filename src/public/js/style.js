
window.addEventListener('wheel', function(e) {
    const delta = Math.sign(e.deltaY);
    const sections = document.querySelectorAll(section);
    let currentIndex = Array.from(sections).findIndex(section => section.getBoundingClientRect().top >= 0);
  
    if (delta > 0 && currentIndex < sections.length - 1) {
      currentIndex++;
    } else if (delta < 0 && currentIndex > 0) {
      currentIndex--;
    }
  
    const targetSection = sections[currentIndex];
    const targetOffset = (window.innerHeight - targetSection.offsetHeight) / 2;
    const targetPosition = targetSection.offsetTop - targetOffset;
  
    window.scrollTo({ top: targetPosition, behavior: 'smooth' });
  });