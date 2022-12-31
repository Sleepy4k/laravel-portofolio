// Import Bootstrap Components
import Row from "react-bootstrap/Row";
import Col from "react-bootstrap/Col";
import Card from "react-bootstrap/Card";
import Container from "react-bootstrap/Container";

export default function Projects({ projects }) {
    return (
        <>
            <section id="projects" className="projects">
                <Container>
                    <Row className="text-center mb-3">
                        <Col>
                            <h2>{transData("page.project.title")}</h2>
                        </Col>
                    </Row>
                    <Row className="justify-content-evenly">
                        {projects && projects.length > 0 ? (
                            projects.map((project, index) => {
                                return (
                                    <Col key={index} className="col-md-4 mb-3">
                                        <Card>
                                            {project.image === null ? (
                                                <Card.Img
                                                    variant="top"
                                                    src="/image/projects/project-1.jpg"
                                                    alt="Project 1"
                                                />
                                            ) : (
                                                <Card.Img
                                                    variant="top"
                                                    src={`/storage/image/${project.image}`}
                                                    alt="Project 1"
                                                />
                                            )}
                                            <Card.Body>
                                                <Card.Title>
                                                    {project.title}
                                                </Card.Title>
                                                <Card.Text>
                                                    {project.description}
                                                </Card.Text>
                                            </Card.Body>
                                        </Card>
                                    </Col>
                                );
                            })
                        ) : (
                            <div></div>
                        )}
                    </Row>
                </Container>
            </section>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                    fill="#0d6efd"
                    fillOpacity="1"
                    d="M0,320L48,298.7C96,277,192,235,288,181.3C384,128,480,64,576,80C672,96,768,192,864,197.3C960,203,1056,117,1152,69.3C1248,21,1344,11,1392,5.3L1440,0L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"
                ></path>
            </svg>
        </>
    );
}
