// Import Core Libraries
import { Head } from "@inertiajs/inertia-react";

// Import Layouts
import PortofolioLayout from "@/Layouts/PortofolioLayout";

// Import Partials
import About from "@/Partials/Portofolio/About";
import Contact from "@/Partials/Portofolio/Contact";
import Projects from "@/Partials/Portofolio/Projects";
import Jumbotron from "@/Partials/Portofolio/Jumbotron";

export default function PortofolioIndex(props) {
    return (
        <PortofolioLayout owner={props.about} application={props.application}>
            <Head title={props.about.name} />
            <Jumbotron owner={props.about} />
            <About owner={props.about} />
            <Projects projects={props.projects} />
            <Contact errors={props.errors} />
        </PortofolioLayout>
    );
}
