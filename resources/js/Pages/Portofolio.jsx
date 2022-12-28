import PortofolioLayout from "@/Layouts/PortofolioLayout";
import { Head } from "@inertiajs/inertia-react";
import Jumbotron from "@/Components/Portofolio/Jumbotron";
import About from "@/Components/Portofolio/About";
import Projects from "@/Components/Portofolio/Projects";
import Contact from "@/Components/Portofolio/Contact";

export default function Portofolio(props) {
    return (
        <PortofolioLayout owner={props.about} application={props.application}>
            <Head title={props.about.name} />
            <Jumbotron owner={props.about} />
            <About owner={props.about} />
            <Projects projects={props.projects} />
            <Contact />
        </PortofolioLayout>
    );
}
