import React from 'react'
import { useTranslation } from 'react-i18next'

export default function useAboutUsSection() {
    const { t } = useTranslation();
    return <div id="about-us" class="container">
        <h2 class="text-center text-info"> {t("ABOUT_US")}</h2>
        <blockquote class="col-xs-12  col-sm-12 col-md-6 col-lg-6">
            <h1> {t("OMAR")}  </h1>
            <img src="assets/images/AboutUsImages/about6.jpg" width="200" height="200" alt="image120" class="img-circle" />
            <footer class="quotes">
                {t("OMAR_QUOTES")}
            </footer>
        </blockquote>
        <blockquote class="col-xs-12  col-sm-12 col-md-6 col-lg-6">
            <h1>{t("MARWAN")}  </h1>

            <img src="assets/images/AboutUsImages/about7.jpg" width="200" height="200" alt="image120" class="img-circle" />
            <footer class="quotes">
                {t("MARWAN_QUOTES")}
            </footer>

        </blockquote>
        <div class="clearfix"></div>

        <blockquote class="col-xs-12  col-sm-12 col-md-6 col-lg-6">
            <h1>{t("AMER")}   </h1>

            <img src="assets/images/AboutUsImages/about8.jpg" width="200" height="200" alt="image120" class="img-circle" />
            <footer class="quotes">
                {t("AMER_QUOTES")}
            </footer>
        </blockquote>
        <blockquote class="col-xs-12  col-sm-12 col-md-6 col-lg-6">
            <h1>{t("KIFAH")}   </h1>

            <img src="assets/images/AboutUsImages/about4.jpg" width="200" height="200" alt="image120" class="img-circle" />
            <footer class="quotes">
                {t("KIFAH_QUOTES")}
            </footer>
        </blockquote>

    </div>

}
