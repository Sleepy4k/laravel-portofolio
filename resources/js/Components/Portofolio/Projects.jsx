import Container from "react-bootstrap/Container";
import Card from "react-bootstrap/Card";
import Row from "react-bootstrap/Row";
import Col from "react-bootstrap/Col";

export default function Projects({ owner }) {
    return (
        <section id="projects" className="projects">
            <Container>
                <Row className="text-center mb-3">
                    <Col>
                        <h2>My Projects</h2>
                    </Col>
                </Row>
                <Row className="justify-content-evenly">
                    <Col className="col-md-4 mb-3">
                        <Card>
                            <Card.Img
                                variant="top"
                                src="image/projects/project-1.jpg"
                                alt="Project 1"
                            />
                            <Card.Body>
                                <Card.Text>
                                    This is a longer card with supporting text
                                    below as a natural lead-in to additional
                                    content. This content is a little bit
                                    longer.
                                </Card.Text>
                            </Card.Body>
                        </Card>
                    </Col>
                    <Col className="col-md-4 mb-3">
                        <Card>
                            <Card.Img
                                variant="top"
                                src="image/projects/project-2.jpg"
                                alt="Project 2"
                            />
                            <Card.Body>
                                <Card.Text>
                                    This is a longer card with supporting text
                                    below as a natural lead-in to additional
                                    content. This content is a little bit
                                    longer.
                                </Card.Text>
                            </Card.Body>
                        </Card>
                    </Col>
                    <Col className="col-md-4 mb-3">
                        <Card>
                            <Card.Img
                                variant="top"
                                src="image/projects/project-3.jpg"
                                alt="Project 3"
                            />
                            <Card.Body>
                                <Card.Text>
                                    This is a longer card with supporting text
                                    below as a natural lead-in to additional
                                    content. This content is a little bit
                                    longer.
                                </Card.Text>
                            </Card.Body>
                        </Card>
                    </Col>
                    <Col className="col-md-4 mb-3">
                        <Card>
                            <Card.Img
                                variant="top"
                                src="image/projects/project-4.jpg"
                                alt="Project 4"
                            />
                            <Card.Body>
                                <Card.Text>
                                    This is a longer card with supporting text
                                    below as a natural lead-in to additional
                                    content. This content is a little bit
                                    longer.
                                </Card.Text>
                            </Card.Body>
                        </Card>
                    </Col>
                    <Col className="col-md-4 mb-3">
                        <Card>
                            <Card.Img
                                variant="top"
                                src="image/projects/project-5.jpg"
                                alt="Project 5"
                            />
                            <Card.Body>
                                <Card.Text>
                                    This is a longer card with supporting text
                                    below as a natural lead-in to additional
                                    content. This content is a little bit
                                    longer.
                                </Card.Text>
                            </Card.Body>
                        </Card>
                    </Col>
                </Row>
            </Container>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                    fill="#ffffff"
                    fillOpacity="1"
                    d="M0,256L60,224C120,192,240,128,360,112C480,96,600,128,720,170.7C840,213,960,267,1080,261.3C1200,256,1320,192,1380,160L1440,128L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
                ></path>
            </svg>
        </section>
    );
}
