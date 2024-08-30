<template>
  <div>
    <section class="dHctcHQtMTI sm:dHctcHQtMTY">
      <div class="dHctcmVsYXRpdmU">
        <div
          class="dHctYWJzb2x1dGU dHctaW5zZXQteC0w dHctYm90dG9tLTA dHctaC0xLzI dHctYmctc2xhdGUtOTAw"
        ></div>
        <div
          class="dHctcmVsYXRpdmU dHctbXgtYXV0bw dHctbWF4LXctc2NyZWVuLXhs dHctcHgtNA sm:dHctcHgtNg lg:dHctcHgtOA"
        >
          <div
            class="dHctcmVsYXRpdmU dHctb3ZlcmZsb3ctaGlkZGVu dHctcm91bmRlZC0yeGw dHctYmctc2t5LTcwMA dHctcHgtNQ dHctcHktMTI sm:dHctcHgtMTY lg:dHctcHktMTQ"
          >
            <img
              alt=""
              loading="lazy"
              width="1920"
              height="478"
              decoding="async"
              data-nimg="1"
              class="dHctYWJzb2x1dGU dHctaW5zZXQtMA dHctaC1mdWxs dHctdy1mdWxs dHctb2JqZWN0LWNvdmVy dHctb2JqZWN0LXJpZ2h0"
              style="color: transparent"
              srcset="bloh/newsletter-bg-1.png 1x?url=%2Fbloh%2Fstatic%2Fmedia%2Fnewsletter-bg.f4eb4d80.png&amp;w=1920&amp;q=75 1x, bloh/newsletter-bg.png 2xe?url=%2Fbloh%2Fstatic%2Fmedia%2Fnewsletter-bg.f4eb4d80.png&amp;w=3840&amp;q=75 2x"
              src="bloh/newsletter-bg.png?url=%2Fbloh%2Fstatic%2Fmedia%2Fnewsletter-bg.f4eb4d80.png&amp;w=3840&amp;q=75"
            />
            <div
              class="dHctcmVsYXRpdmU dHctZmxleA dHctdy1mdWxs dHctZmxleC1jb2w dHctaXRlbXMtY2VudGVy lg:dHctZmxleC1yb3c"
            >
              <div
                class="dHctbWF4LXctMnhs dHctdGV4dC1jZW50ZXI lg:dHctcHItNA lg:dHctdGV4dC1sZWZ0"
              >
                <h3
                  class="dHctZm9udC1kaXNwbGF5 dHctdGV4dC00eGw dHctZm9udC1zZW1pYm9sZA dHctdGV4dC13aGl0ZQ sm:dHctdGV4dC01eGw"
                >
                  S'abonner à ma newsletter
                </h3>
                <p
                  class="dHctbXgtYXV0bw dHctbXQtNA dHctbWF4LXctbGc dHctdGV4dC1sZw dHctdGV4dC1za3ktNTA lg:dHctbXgtMA lg:dHctbXQtNg"
                >
                  Soyez informé de toutes mes actualités en vous abonnant à la
                  newsletter.
                </p>
              </div>
              <form
                class="dHctcmVsYXRpdmU dHctbXQtMTA dHctdy1mdWxs dHctbWF4LXctbGc lg:dHctbXQtMA"
                @submit.prevent="abonner"
                v-if="!success"
              >
                <input
                  type="email"
                  class="dHctaC0xNA dHctdy1mdWxs dHctcm91bmRlZC1mdWxs dHctYm9yZGVyLTA dHctYmctd2hpdGUvMTA dHctcHktMw.5 dHctcGwtNQ dHctcHItMzI dHctdGV4dC1zbQ dHctbGVhZGluZy01 dHctdGV4dC1za3ktNTA dHctcGxhY2Vob2xkZXItc2t5LTEwMC85MA dHctb3V0bGluZS1ub25l dHctcmluZy0x dHctcmluZy13aGl0ZS8yNQ dHctYmFja2Ryb3AtYmx1cg dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ focus:dHctb3V0bGluZS1ub25l focus:dHctcmluZy0y focus:dHctcmluZy13aGl0ZS8zMA sm:dHctcGwtNg"
                  placeholder="Entrez votre email."
                  autocomplete="email"
                  v-model="data.email"
                  required
                /><button
                  v-if="!btn"
                  type="submit"
                  class="dHctYWJzb2x1dGU dHctcmlnaHQtMQ.5 dHctdG9wLTE.5 dHctaW5saW5lLWZsZXg dHctaC0xMQ dHctaXRlbXMtY2VudGVy dHctcm91bmRlZC1mdWxs dHctYmctc2t5LTkwMA dHctcHgtNQ dHctcHktMw dHctdGV4dC1zbQ dHctZm9udC1zZW1pYm9sZA dHctdGV4dC1za3ktNTA dHctb3V0bGluZS1ub25l dHctdHJhbnNpdGlvbg dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ hover:dHctYmctc2t5LTgwMA focus:dHctb3V0bGluZS1ub25l sm:dHctcHgtNw sm:dHctdGV4dC1tZA"
                >
                  S'abonner
                </button>
                <span v-if="btn" style="color: white">En cours ...</span>
              </form>

              <div
                class="relative border border-gray-200 rounded-lg shadow-lg w-full"
                v-if="success"
              >
                <button
                  class="absolute p-1 bg-gray-100 border border-gray-300 rounded-full -top-1 -right-1"
                  @click="cancel"
                >
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    class="w-3 h-3"
                    viewBox="0 0 20 20"
                    fill="currentColor"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                      clip-rule="evenodd"
                    />
                  </svg>
                </button>

                <div class="flex items-center p-4">
                  <img
                    class="object-cover w-12 h-12 rounded-lg"
                    src="bloh/contactPro.jpg"
                    alt=""
                  />

                  <div class="ml-3 overflow-hidden">
                    <p class="font-medium text-black">Ainahin Béringère BLOH</p>
                    <p
                      class="max-w-xs text-sm text-gray-500 truncate text-white"
                    >
                      Abonnement effectué avec succès.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <footer
        class="dHctb3ZlcmZsb3ctaGlkZGVu dHctYmctc2xhdGUtOTAw dHctcGItOA dHctcHQtMjA sm:dHctcGItMTI sm:dHctcHQtMjQ lg:dHctcHQtMzI"
      >
        <div
          class="dHctbXgtYXV0bw dHctbWF4LXctc2NyZWVuLXhs dHctcHgtNQ sm:dHctcHgtNg lg:dHctcHgtOA"
        >
          <div
            class="dHctbXgtYXV0bw dHctZ3JpZA dHctbWF4LXcteGw dHctaXRlbXMtY2VudGVy dHctZ2FwLTU lg:dHctbXgtMA lg:dHctbWF4LXctbm9uZQ lg:dHctZ3JpZC1jb2xzLTEy lg:dHctZ2FwLTEy xl:dHctZ2FwLTIw"
          >
            <div class="lg:dHctY29sLXNwYW4tNw">
              <h3
                class="dHctdGV4dC1jZW50ZXI dHctZm9udC1kaXNwbGF5 dHctdGV4dC00eGw dHctZm9udC1zZW1pYm9sZA dHctdGV4dC13aGl0ZQ sm:dHctdGV4dC01eGw lg:dHctbWF4LXcteGw lg:dHctdGV4dC1sZWZ0"
              >
                Accélérez vos idées vers l'excellence
              </h3>
              <div class="dHctaGlkZGVu lg:dHctYmxvY2s">
                <a
                  class="dHctaW5saW5lLWZsZXg dHctaXRlbXMtY2VudGVy dHctcm91bmRlZC1mdWxs dHctZ2FwLTI.5 dHctanVzdGlmeS1jZW50ZXI dHctcHgtNw dHctcHktMw dHctdGV4dC1tZA dHctZm9udC1zZW1pYm9sZA dHctbGVhZGluZy1ub25l dHctb3V0bGluZS1vZmZzZXQtMg dHctdHJhbnNpdGlvbi1hbGw dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ active:dHctdHJhbnNpdGlvbi1ub25l dHctYmctd2hpdGU hover:dHctYmctc2t5LTUw dHctdGV4dC1zbGF0ZS03MDA dHctbXQtMTI"
                  href="tel:+22996031886"
                  >Passer un appel<svg
                    xmlns="http://www.w3.org/2000/svg"
                    viewbox="0 0 20 20"
                    fill="currentColor"
                    class="dHctaC01 dHctdy01"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M5.22 14.78a.75.75 0 001.06 0l7.22-7.22v5.69a.75.75 0 001.5 0v-7.5a.75.75 0 00-.75-.75h-7.5a.75.75 0 000 1.5h5.69l-7.22 7.22a.75.75 0 000 1.06z"
                      clip-rule="evenodd"
                    ></path></svg
                ></a>
              </div>
            </div>
            <div
              class="dHctZmxleA dHctZmxleC1jb2w dHctaXRlbXMtY2VudGVy lg:dHctY29sLXNwYW4tNQ lg:dHctaXRlbXMtc3RhcnQ"
            >
              <p
                class="dHctdGV4dC1jZW50ZXI dHctdGV4dC1sZw dHctdGV4dC1zbGF0ZS01MA lg:dHctbWF4LXctc20 lg:dHctdGV4dC1sZWZ0"
              >
                Contactez-nous
              </p>

              <div
                class="dHctbXQtMTY dHctZ3JpZA dHctdy1mdWxs dHctbWF4LXctc20 dHctZ3JpZC1jb2xzLTI dHctZ2FwLTM.5 sm:dHctbWF4LXctbm9uZQ sm:dHctZ3JpZC1jb2xzLTM lg:dHctbXQtOA lg:dHctZ2FwLTI.5 xl:dHctZ2FwLTM.5"
              >
                <a
                  class="dHctZmxleA dHctaXRlbXMtY2VudGVy dHctanVzdGlmeS1jZW50ZXI dHctZ2FwLTI.5 dHctcm91bmRlZC1mdWxs dHctYm9yZGVy dHctYm9yZGVyLXNsYXRlLTYwMC85MA dHctcHktMg.5 dHctdGV4dC1zbQ dHctdGV4dC1zbGF0ZS01MA dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ hover:dHctYmctc2xhdGUtODAw hover:dHctdGV4dC13aGl0ZQ lg:dHctZ2FwLTI xl:dHctZ2FwLTI.5"
                  href="mailto:ainahinbloh@gmail.com"
                  ><i
                    class="fa-solid fa-envelopes dHctaC00 dHctdy00 dHctc2hyaW5rLTA dHctdGV4dC1zbGF0ZS0yMDA dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ group-hover:dHctZmlsbC1zbGF0ZS0xMDA"
                  >
                  </i
                  >Email</a
                ><a
                  class="dHctZmxleA dHctaXRlbXMtY2VudGVy dHctanVzdGlmeS1jZW50ZXI dHctZ2FwLTI.5 dHctcm91bmRlZC1mdWxs dHctYm9yZGVy dHctYm9yZGVyLXNsYXRlLTYwMC85MA dHctcHktMg.5 dHctdGV4dC1zbQ dHctdGV4dC1zbGF0ZS01MA dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ hover:dHctYmctc2xhdGUtODAw hover:dHctdGV4dC13aGl0ZQ lg:dHctZ2FwLTI xl:dHctZ2FwLTI.5"
                  href="https://www.facebook.com/profile.php?id=100083515921361&mibextid=ZbWKwL"
                  target="_blank"
                  ><i
                    class="fa-brands fa-facebook dHctaC00 dHctdy00 dHctc2hyaW5rLTA dHctdGV4dC1zbGF0ZS0yMDA dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ group-hover:dHctZmlsbC1zbGF0ZS0xMDA"
                  >
                  </i
                  >Facebook</a
                ><a
                  class="dHctZmxleA dHctaXRlbXMtY2VudGVy dHctanVzdGlmeS1jZW50ZXI dHctZ2FwLTI.5 dHctcm91bmRlZC1mdWxs dHctYm9yZGVy dHctYm9yZGVyLXNsYXRlLTYwMC85MA dHctcHktMg.5 dHctdGV4dC1zbQ dHctdGV4dC1zbGF0ZS01MA dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ hover:dHctYmctc2xhdGUtODAw hover:dHctdGV4dC13aGl0ZQ lg:dHctZ2FwLTI xl:dHctZ2FwLTI.5"
                  href="https://www.linkedin.com/in/ainahin-b%C3%A9ring%C3%A8re-bloh-a1a453252/"
                  target="_blank"
                  ><i
                    class="fa-brands fa-linkedin dHctaC00 dHctdy00 dHctc2hyaW5rLTA dHctdGV4dC1zbGF0ZS0yMDA dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ group-hover:dHctZmlsbC1zbGF0ZS0xMDA"
                  >
                  </i
                  >LinkedIn</a
                ><!--a
                        class="dHctZmxleA dHctaXRlbXMtY2VudGVy dHctanVzdGlmeS1jZW50ZXI dHctZ2FwLTI.5 dHctcm91bmRlZC1mdWxs dHctYm9yZGVy dHctYm9yZGVyLXNsYXRlLTYwMC85MA dHctcHktMg.5 dHctdGV4dC1zbQ dHctdGV4dC1zbGF0ZS01MA dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ hover:dHctYmctc2xhdGUtODAw hover:dHctdGV4dC13aGl0ZQ lg:dHctZ2FwLTI xl:dHctZ2FwLTI.5"
                        href="#"
                        ><svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="16"
                            height="16"
                            viewbox="0 0 16 16"
                            fill="currentColor"
                            class="dHctaC00 dHctdy00 dHctc2hyaW5rLTA dHctdGV4dC1zbGF0ZS0yMDA dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ group-hover:dHctZmlsbC1zbGF0ZS0xMDA"
                        >
                            <g clip-path="url(#clip0_315_596)">
                            <path
                                fill-rule="evenodd"
                                clip-rule="evenodd"
                                d="M8 0.200195C3.6 0.200195 0 3.8002 0 8.2002C0 11.7335 2.26667 14.7335 5.46667 15.8002C5.86667 15.8669 6 15.6002 6 15.4002C6 15.2002 6 14.7335 6 14.0669C3.8 14.5335 3.33333 13.0002 3.33333 13.0002C3 12.0669 2.46667 11.8002 2.46667 11.8002C1.66667 11.3335 2.46667 11.3335 2.46667 11.3335C3.26667 11.4002 3.66667 12.1335 3.66667 12.1335C4.4 13.3335 5.53333 13.0002 6 12.8002C6.06667 12.2669 6.26667 11.9335 6.53333 11.7335C4.73333 11.5335 2.86667 10.8669 2.86667 7.8002C2.86667 6.93353 3.2 6.2002 3.66667 5.66686C3.66667 5.4002 3.33333 4.6002 3.8 3.53353C3.8 3.53353 4.46667 3.33353 6 4.33353C6.66667 4.13353 7.33333 4.06686 8 4.06686C8.66667 4.06686 9.33333 4.13353 10 4.33353C11.5333 3.26686 12.2 3.53353 12.2 3.53353C12.6667 4.66686 12.3333 5.46686 12.2667 5.66686C12.8 6.2002 13.0667 6.93353 13.0667 7.8002C13.0667 10.8669 11.2 11.5335 9.4 11.7335C9.66667 12.0002 9.93333 12.4669 9.93333 13.2002C9.93333 14.2669 9.93333 15.1335 9.93333 15.4002C9.93333 15.6002 10.0667 15.8669 10.4667 15.8002C13.6667 14.7335 15.9333 11.7335 15.9333 8.2002C16 3.8002 12.4 0.200195 8 0.200195Z"
                            ></path>
                            </g>
                            <defs>
                            <clippath id="clip0_315_596">
                                <rect width="16" height="16" fill="white"></rect>
                            </clippath>
                            </defs></svg
                        >Github</a
                        -->
              </div>
            </div>
          </div>
          <hr
            class="dHctbWItNg dHctbXQtMTI dHctaC1weA dHctdy1mdWxs dHctYm9yZGVyLXNsYXRlLTYwMC85MA sm:dHctbWItMTA sm:dHctbXQtMTY"
          />
          <div
            class="dHctZmxleA dHctZmxleC1jb2w dHctaXRlbXMtY2VudGVy dHctanVzdGlmeS1iZXR3ZWVu md:dHctZmxleC1yb3c"
          >
            <div class="dHctZmxleA dHctaXRlbXMtY2VudGVy dHctZ2FwLTY">
              <router-link
                class="dHctdGV4dC1iYXNl dHctZm9udC1tZWRpdW0 dHctdGV4dC1zbGF0ZS0xMDA dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ hover:dHctdGV4dC13aGl0ZQ"
                to="/about"
                >À Propos</router-link
              ><router-link
                class="dHctdGV4dC1iYXNl dHctZm9udC1tZWRpdW0 dHctdGV4dC1zbGF0ZS0xMDA dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ hover:dHctdGV4dC13aGl0ZQ"
                to="/work"
                >Réalisations</router-link
              ><router-link
                class="dHctdGV4dC1iYXNl dHctZm9udC1tZWRpdW0 dHctdGV4dC1zbGF0ZS0xMDA dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ hover:dHctdGV4dC13aGl0ZQ"
                href="/blog"
                >Blog</router-link
              ><router-link
                class="dHctdGV4dC1iYXNl dHctZm9udC1tZWRpdW0 dHctdGV4dC1zbGF0ZS0xMDA dHctZHVyYXRpb24tMjAw dHctZWFzZS1pbi1vdXQ hover:dHctdGV4dC13aGl0ZQ"
                to="/contact"
                >Contact</router-link
              >
            </div>
            <p
              class="dHctbXQtOA dHctdGV4dC1iYXNl dHctdGV4dC1zbGF0ZS00MDAvOTA md:dHctbXQtMA"
            >
              ©
              <!-- -->2024<!-- -->
              bStepUp. All rights reserved.
            </p>
          </div>
        </div>
      </footer>
    </section>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      data: {
        email: "",
      },
      success: false,
      btn: false,
    };
  },
  methods: {
    async abonner() {
      this.btn = true;
      const res = await axios.post("/new", this.data);

      if (res.status == 200) {
        this.success = true;
        this.data.email = "";
        this.btn = false;
      }
      this.btn = false;
    },
    cancel() {
      this.success = false;
    },
  },
};
</script>