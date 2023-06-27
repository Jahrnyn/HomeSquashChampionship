<x-layout>
    <div class="Loggedin-msg-container">
        <h2>Hello <strong>{{auth()->user()->username}}</strong>!</h2>
        <p>You have successfully logged in</p>
    </div>
    <section class="results-container">
        <article>
            <h2><a href="/monthlyResults/jun2023">Június</a></h2>
            <div class="month-content">
                <div class="final-result">
                    Állás = <b>FLINKI</b> = 3,5-1,5 <br>
                </div>
                <br>
                <p>
                    06.02. Péntek 17:00 3-as EGÁL 5-5 <br>
                    06.05. Hétfő 17:00 3-as FLINKI 6-4 <br>
                    06.07. Szerda 16:00 3-as EGÁL 4-4 <br>
                    06.14. Szerda 18:00 1-es FLINKI 6-3<br>
                    06.19. Hetfő 17:00 3-as FLINKI 6-3 <br>
                    06.22. Csütörtök 17:00 3-as ZOLI 6-4 <br>
                    06.26. Hétfő 17:00 1-es
                </p>
            </div>
        </article>
        <article>
            <h2><a href="/monthlyResults/may2023">Május</a></h2>
            <div class="month-content">
                <div class="final-result">
                    Eredmény = <b>DÖNTETLEN</b> = 1,5-1,5 <br>
                </div>
            </div>
        </article>
        <article>
            <h2><a href="/monthlyResults/apr2023">Április</a></h2>
            <div class="month-content">
                <div class="final-result">
                    Eredmény = <b>FLINKI</b> = 3,5-2,5 <br>
                </div>
            </div>
        </article>
        <article>
            <h2><a href="/monthlyResults/mar2023">Március</a></h2>
            <div class="month-content">
                <div class="final-result">
                    Eredmény = <b>FLINKI</b> = 4-2 <br>
                </div>
            </div>
        </article>
        <article>
            <h2><a href="/monthlyResults/feb2023">Február</a></h2>
            <div class="month-content">
                <div class="final-result">
                    Eredmény = <b>DÖNTETLEN</b> = 4-4 <br>
                </div>
            </div>
        </article>
        <article>
            <h2><a href="/monthlyResults/jan2023">Január</a></h2>
            <div class="month-content">
                <div class="final-result">
                    Eredmény = <b>FLINKI</b> = 7,5-3,5 <br>
                </div>
            </div>
        </article>
    </section>
    <script src="/main.js"></script>
</body>
</html>
</x-layout>