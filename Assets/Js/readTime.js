function readTime() {
    const wordsPerMinute = 270;
    // Select all the paragraphs in element with ID readText.
    console.log('WPM :' + wordsPerMinute);
    var post = document.querySelectorAll('.Post');
    var time = document.querySelector('.readTime');
    console.log(post);
    // The counter.
    var count = 0;
    console.log('Count :' + count);
    for (var i = 0; i < post.length; i++) {
        // Split the innerHtml of the current paragraph to count the words.
        count += post[i].innerHTML.split(' ').length;
        console.log('Count :' + count);
    }
    //split text by spaces to define total words
    var totalWords = count;
    console.log('Total Words :' + totalWords)
    //define words per second based on words per minute (s.wordsPerMinute)
    var wordsPerSecond = wordsPerMinute / 60;
    console.log('WPS :' + wordsPerSecond);
    //define total reading time in seconds
    var totalReadingTimeSeconds = totalWords / wordsPerSecond;
    console.log('TotalReadingTimeSeconds' + totalReadingTimeSeconds);
    // define reading time
    var readingTimeDuration = Math.floor(totalReadingTimeSeconds / 60);
    console.log('ReadingTimeDuration :' + readingTimeDuration);
    // define remaining reading time seconds
    var readingTimeSeconds = Math.round(totalReadingTimeSeconds - (readingTimeDuration * 60));
    console.log('ReadingTimeSeconds :' + readingTimeSeconds);
    if (readingTimeDuration > 0) {
        if (readingTimeSeconds > 30) {
            readingTimeDuration = readingTimeDuration + 1
            time.innerHTML = readingTimeDuration + ' min read';
        } 
        time.innerHTML = readingTimeDuration + ' min read';
    } else {
        time.innerText = '1 min read';
    }
}
