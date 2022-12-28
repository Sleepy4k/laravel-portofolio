import Container from "react-bootstrap/Container";
import Row from "react-bootstrap/Row";
import Col from "react-bootstrap/Col";

export default function About({ owner }) {
    return (
        <section id="about">
            <Container>
                <Row className="text-center mb-3">
                    <Col>
                        <h2>About Me</h2>
                    </Col>
                </Row>
                <Row className="justify-content-center fs-5 text-center">
                    <Col className="col-md-4">
                        <p>{owner.description}</p>
                    </Col>
                    <Col className="col-md-4">
                        <p>{owner.mission}</p>
                    </Col>
                </Row>
            </Container>

            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path
                    fill="#3c82f3a9"
                    fillOpacity="1"
                    d="M0,32L60,69.3C120,107,240,181,360,208C480,235,600,213,720,181.3C840,149,960,107,1080,85.3C1200,64,1320,64,1380,64L1440,64L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
                ></path>
            </svg>
        </section>
    );
}
